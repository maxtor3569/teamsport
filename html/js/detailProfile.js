
  $(function() {
  
    $( "#sortable" ).sortable({
      revert: true
    });
    $( "#draggable" ).draggable({
      connectToSortable: "#sortable",
      helper: "clone",
      revert: "invalid"
    });
    //$( "ul, li" ).disableSelection();
	
  });

	Shadowbox.init();

	var contentBox ="<form action='{{ path('ImageProfile') }}' method='post' enctype='multipart/form-data'>Ch?n hình ?nh :<input id='imageProfile' name='file' type='file'/><input type='submit'></form>";

 
   	function inviteFriend(id) 
	{

		$.ajax({
        type: "POST",
		
		data :{ idProfile : id },
		dataType: 'text',
        url: "{{ path('InviteFriend') }}",
        cache: false,
        success: function(data){
			Alertify.dialog.alert('Invitation send');
			window.location.reload();
        }
		});    
	}
	function removeFriend(id) 
	{

		$.ajax({
        type: "POST",
		
		data :{ idProfile : id },
		dataType: 'text',
        url: "{{ path('RemoveFriend') }}",
        cache: false,
        success: function(data){
			alert('B?n xoá thành công');
			window.location.reload();
        }
		});    
	}
	function addTeam(id) 
	{
		var value=$('#dropDownId').val();
		$.ajax({
        type: "POST",
		data :{ idTeam : value,idProfile : id },
		dataType: 'text',
        url: "{{ path('AddProfileToTeam') }}",
        cache: false,
        success: function(data){
			alert('This Players was added to your team');
			window.parent.Shadowbox.close();
			window.location.reload();
        }
		});    
	}
	function notification_play(id)
	{
		var time = jQuery('#timePlay').val();
		var where = jQuery('#placePlay').val();
		
		$.ajax({
        type: "POST",
		data :{ idProfileInvite : id,timePlay : time , placePlay: where },
		dataType: 'text',
        url: "{{ path('InviteToPlay') }}",
        cache: false,
        success: function(data){
		
	
			Alertify.dialog.alert('Thu m?i choi cùng dã du?c g?i t?i ngu?i choi. Cám on.');
			window.parent.Shadowbox.close();
			window.setTimeout(window.location.reload(), 2000);
        }
		});    
	
	
	}
 
   var from = 0, step = 10;

function showNext(list) {

  list
    .find('li').hide().end()
    .find('li:lt(' + (from + step) + '):not(li:lt(' + from + '))')
      .show();
  from += step;
}

function showPrevious(list) {
  from -= step;
  list
    .find('li').hide().end()
    .find('li:lt(' + from + '):not(li:lt(' + (from - step) + '))')
      .show();
}



// clicking on the 'more' link:
$('#more').click(function(e) {
  e.preventDefault();
  showNext($('ul'));
});


	$(document).ready(function() {
		// show initial set
		showNext($('#friends'));
			
		$('#calendar').fullCalendar({
		defaultView: 'agendaWeek',
			header: false,
			firstDay : 1,
			height: 250,
			events: "json_events.php",
			dayClick: function() {
					Alertify.dialog.prompt("Event", function (e) {
					if (e) {
						// user clicked "ok"
					} else {
						// user clicked "cancel"
					}
				});
			}
		});
		
	});

