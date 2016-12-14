INSERT INTO core_available_plugin_param(
            
            fkplugin, 
            paramname)
    VALUES (
    (select id from core_available_plugin where pluginaliasname='fullcalendarv261'),
	'all_day_slot'
    ), 
    (
    (select id from core_available_plugin where pluginaliasname='fullcalendarv261'),
	'default_view'
    ),
    (
    (select id from core_available_plugin where pluginaliasname='fullcalendarv261'),
	'min_time'
    ),
    (
    (select id from core_available_plugin where pluginaliasname='fullcalendarv261'),
	'max_time'
    ),
    (
    (select id from core_available_plugin where pluginaliasname='fullcalendarv261'),
	'slot_duration'
    ),
    (
    (select id from core_available_plugin where pluginaliasname='fullcalendarv261'),
	'time_format'
    ),
    (
    (select id from core_available_plugin where pluginaliasname='fullcalendarv261'),
	'scroll_time'
    ),
    (
    (select id from core_available_plugin where pluginaliasname='fullcalendarv261'),
	'first_day'
    ),
    (
    (select id from core_available_plugin where pluginaliasname='fullcalendarv261'),
	'show_popups'
    ),
    (
    (select id from core_available_plugin where pluginaliasname='fullcalendarv261'),
	'popup_reminder_time_before'
    ),
    (
    (select id from core_available_plugin where pluginaliasname='fullcalendarv261'),
	'popup_reminder_time_after'
    ),
    (
    (select id from core_available_plugin where pluginaliasname='fullcalendarv261'),
	'blhidecompletedevents'
    ),
    (
    (select id from core_available_plugin where pluginaliasname='fullcalendarv261'),
	'blresources'
    ),
    (
    (select id from core_available_plugin where pluginaliasname='fullcalendarv261'),
	'monday'
    ),  
    (
    (select id from core_available_plugin where pluginaliasname='fullcalendarv261'),
	'tuesday'
    ),
    (
    (select id from core_available_plugin where pluginaliasname='fullcalendarv261'),
	'wednesday'
    ),
    (
    (select id from core_available_plugin where pluginaliasname='fullcalendarv261'),
	'thursday'
    ),
    (
    (select id from core_available_plugin where pluginaliasname='fullcalendarv261'),
	'friday'
    ),
    (
    (select id from core_available_plugin where pluginaliasname='fullcalendarv261'),
	'saturday'
    ),
    (
    (select id from core_available_plugin where pluginaliasname='fullcalendarv261'),
	'sunday'
    ),
    (
    (select id from core_available_plugin where pluginaliasname='fullcalendarv261'),
	'blshowdefaultddeviderview'
    ),
    (
    (select id from core_available_plugin where pluginaliasname='fullcalendarv261'),'dleventstatusdefault'
    ),
    (
    (select id from core_available_plugin where pluginaliasname='fullcalendarv261'),'dleventtypedefault'
    );

