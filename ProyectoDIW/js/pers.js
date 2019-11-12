$(function() {
    $('.chart').easyPieChart({
        //Configuration goes here
        size: "150",
        barColor: 'red',
        lineWidth: "20",
        lineCap:'square',
        scaleLength:'1',
        trackColor:'#949494',
        animate:({
            duration:"1000",
            enabled:true
        })
    });

    /*
    if (window.matchMedia('(max-width: 768px').matches){
        $('.chart').easyPieChart({
            scaleLength:'1'
        });
    }*/
   
});

