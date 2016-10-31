var events = [];

function clearSelected(){
    $(".event-container .selected").removeClass("selected");
}

function toggleEvtInfo(){
    $(".evt-info-wrap").animate(
        {
            width: 'toggle'
        },
        500
    );
}

function run(){
    $(".event-container").on("click",function(){    
        clearSelected();
        $(this).find(".evt-summary").addClass("selected");

        var color = $(this).find(".date-box").css("background-color");
        
        $("#evt-info").css("border-left","3em " + color + " solid");
        $("#evt-info-close").css("color",color);

        var title = $(this).find(".evt-summary h3").text();
        $("#evt-title").text(title);

        var eid = $(this).data("eid");
        $("#evt-loc").html(events[eid]['location']);
        $("#evt-time").text(events[eid]['time']);
        $("#evt-desc").html(events[eid]['desc']);

        if(screen.width < 600) toggleEvtInfo();
    });
}

$(document).ready(function(){
    $.ajax('/scripts/cal-events.php',{
        success:function(data){
            console.log(data);
            var dataP = $.parseJSON(data);
            
            var pageHtml = dataP['html'];
            $('#calendar-events').html(pageHtml);
            
            events = dataP['eventData'];
            
            $('#loading').addClass("hidden");
            
            run();
        },
        data:{
            'action':'get'
        },
        type:'POST'
    });
});