<?php

            namespace B2b;

            class Module {

                public function registerAutoloaders() {

                    $loader = new \Phalcon\Loader();

                    $loader->registerNamespaces(array(
                        "B2b\Controllers" => "../apps/b2b/controllers/",
                        "B2b\Models" => "../apps/b2b/models/",
                        "B2b\Models\AliasModels" => "../apps/b2b/models/AliasModels/",
                        "B2b\Models\CoreModels" => "../apps/b2b/models/CoreModels/",
                        "B2b\Models\PrototypeModels" => "../apps/b2b/models/PrototypeModels/",
                        "B2b\Models\ProductionModels" => "../apps/b2b/models/ProductionModels/",
                        "B2b\Models\TmpModels" => "../apps/b2b/models/TmpModels/",
                        "B2b\Plugins" => "../apps/b2b/plugins/",
                    ));
                    $loader->registerDirs(
                            array(
                                "../apps/b2b/customhelpers",
                                "../apps/b2b/customhelpers/autogen",
                                "../apps/b2b/customhelpers/common",
                                "../apps/b2b/customhelpers/crm",
                                "../apps/b2b/customhelpers/crm/common",
                                "../apps/b2b/customhelpers/crm/core",
                                "../apps/b2b/customhelpers/crm/mod",
                                "../apps/b2b/customhelpers/crm/views",
                            )
                    );

                    $loader->register();
                }
                public function registerServices($di) {
                    $di->set("dispatcher", function() {

                        $dispatcher = new \Phalcon\Mvc\Dispatcher();

                        //Attach a event listener to the dispatcher
                        $eventManager = new \Phalcon\Events\Manager();

                        $eventManager->attach("dispatch", function ($event, $dispatcher, $exception) {
                            if ($event->getType() == "beforeException") {
                                switch ($exception->getCode()) {
                                    case \Phalcon\Dispatcher::EXCEPTION_HANDLER_NOT_FOUND:
                                    case \Phalcon\Dispatcher::EXCEPTION_ACTION_NOT_FOUND:
                                        $dispatcher->forward(array(
                                            "controller" => "frontend",
                                            "action" => "route404"
                                        ));

                                        return false;
                                    default:
                                        $mydi = \Phalcon\DI::getDefault();
                                        $mydi->controller_params_array["exception"]["message"] = $exception->getMessage();
                                        $dispatcher->forward(array(
                                            "controller" => "frontend",
                                            "action" => "generalexceptionerror"
                                        ));
                                        error_log($exception->getMessage());

                                        return false;
                                }
                            }
                        });
                        $dispatcher->setEventsManager($eventManager);
                        $dispatcher->setDefaultNamespace("B2b\Controllers\\");
                        return $dispatcher;
                    });


                    $di->set("view", function() {
                        $view = new \Phalcon\Mvc\View();
                        $view->setViewsDir("../apps/b2b/views/");
                        $view->registerEngines(array(".phtml" => "Phalcon\Mvc\View\Engine\Php", ".volt" => "Phalcon\Mvc\View\Engine\Volt",
                        ));
                        return $view;
                    });
                    $di->set("dbopen", function() use ($di) {
                        if (!isset($di)) {
                            $di = \Phalcon\DI::getDefault();
                        }
                        if (isset($di->dbopen)) {
                            $con = $di->dbopen;
                        } else {
                            $con = $di->get("db");
                            $di->dbopen = $con;
                        }
                        return $con;
                    }, true);
                    $di->set("db", function() {
                        $dbAdapter = new \Phalcon\Db\Adapter\Pdo\Postgresql(array(
                            "host" => "127.0.0.1",
                            "username" => "b2badminuser",
                            "password" => "b2bdbb2badminuser1975",
                            "dbname" => "b2bdb"
                        ));
                        $dbAdapter->setDialect(new Models\CoreModels\PpB2bAdminDbFix());
                        return $dbAdapter;
                    });
                    $di->set("dbB2bdbSlave", function() {
                        $dbAdapter = new \Phalcon\Db\Adapter\Pdo\Postgresql(array(
                            "host" => "127.0.0.1",
                            "username" => "b2badminuser",
                            "password" => "b2bdbb2badminuser1975",
                            "dbname" => "b2bdb"
                        ));
                        $dbAdapter->setDialect(new Models\CoreModels\PpB2bAdminDbFix());
                        return $dbAdapter;
                    });
                    $di->set("dbB2bdbMaster", function() {
                        $dbAdapter = new \Phalcon\Db\Adapter\Pdo\Postgresql(array(
                            "host" => "127.0.0.1",
                            "username" => "b2badminuser",
                            "password" => "b2bdbb2badminuser1975",
                            "dbname" => "b2bdb"
                        ));
                        $dbAdapter->setDialect(new Models\CoreModels\PpB2bAdminDbFix());
                        return $dbAdapter;
                    });
                    $di->set("dbB2badminSuper", function() {
                        $dbAdapter = new \Phalcon\Db\Adapter\Pdo\Postgresql(array(
                            "host" => "127.0.0.1",
                            "username" => "ppb2badminusr",
                            "password" => "ppb2badminusr1975",
                            "dbname" => "b2bdb"
                        ));
                        $dbAdapter->setDialect(new Models\CoreModels\PpB2bAdminDbFix());
                        return $dbAdapter;
                    });
                    $di->set("defaultSchema", function() {
                        return"b2badminschema";
                    });
                    $di->set("defaultApp", function() {
                        return"b2b";
                    });
                }

            }
