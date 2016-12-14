//Pan Pan
/* Setup general page controller */
angular.module('MetronicApp').controller('GeneralPageController', ['$rootScope', '$scope', 'settings', function($rootScope, $scope, settings) {
    $scope.$on('$viewContentLoaded', function() {
    	// initialize core components
        //alert(location);
        var page_url_id='#sidebar_menu_link_'+location.hash.replace(/\#\/(.+?)\.html/, '$1');
        var regex = /\b--\b\w+\b--\b/g;
        page_url_id=page_url_id.split("/").join("_");//page_url_id.replace("/","_");
        page_url_id = page_url_id.replace(regex, "");
        
    	App.initAjax();
        Layout.setSidebarMenuActiveLink('set', $(page_url_id));

    	// set default layout mode
        $rootScope.settings.layout.pageBodySolid = false;
        $rootScope.settings.layout.pageSidebarClosed = false;
       
        //window.location.reload();
        //window.alert('loaded');
    });
    
}]);