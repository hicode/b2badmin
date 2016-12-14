var HelperFns = {
    Calendar: {
        eventAddPerson: function(data) {
            alert('add person is clicked');
        },
        eventRemovePerson: function(data) {
            alert('remove person is clicked');
        },
        eventCopy: function(data) {
            alert('copy is clicked');
        },
        eventPrintPDF: function(data) {
            alert('print is clicked');
        },
        eventDelete: function(data) {
            alert('delete is clicked');
        }
    },
    blockUI: function (target) {
        App.blockUI({
           target: target != '' ? target : 'html',
           boxed: false,
           animate: false,
           message: ' ',
           textOnly: true,
           iconOnly: false
       });
    },
    unblockUI: function (target) {
        App.unblockUI(target != '' ? target : 'html');
    },
    changeOptionStatus: function (select, current_option) {
        if ( current_option.is(':last-child') ) {
            this.changeOptionStatus(select, select.children(':first'));
        }
        else {
            if ( current_option.next().is(':disabled') ) {
                this.changeOptionStatus(select, current_option.next());
            }
            else {
                select.val(current_option.next().val());
            }
        }
    },
    btnCalendarViewerHelper: function () {
        $('#private-calendar-hide-event-viewer').on('click', function() {
            var portletViewer = $('#portlet-viewer-calendar-events');
            var portletCalendar = $('#portlet-calendar');
            var buttonViewerShow = $('#private-calendar-show-event-viewer');
            portletViewer.fadeOut(500, function() {
                // Do some ajax if needed, before remove of portlet
                portletViewer.remove();
                portletCalendar.removeClass('col-md-9').addClass('col-md-12');
                buttonViewerShow.fadeIn(500);
            });
        });
    }
};