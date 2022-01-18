$(function(){
    function loadJSON() {
        $getJSON(/*"/api/step2/"*/ "localhost:3000", function(generateRandomJSON) {
            console.log(generateRandomJSON);
            $(".app2_container").text(generateRandomJSON[0].about);
        });
    };
    loadJSON();
    setInterval(loadJSON, 5000);
});