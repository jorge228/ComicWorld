$(function() {
    $('.chart').easyPieChart({
        //Configuration goes here
        size: "150",
        barColor: 'false',
        lineWidth: "20",
        lineCap:'square',
        trackColor:'#949494',
        animate:({
            duration:"1000",
            enabled:true
        })
    });

    $(window).scroll(function(){
        $('.chart').easyPieChart({
            barColor:'red'
        });

        $('.chart').data('easyPieChart').update(40);
    });
});

