    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=[" your-google-map-api"]&libraries=places"></script>
    <script src="{{ asset('dashboard-assets/dist/js/app.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
    <script>
        function imageGallery() {
            return {
                images: [],
                api_key : "15819227-ef2d84d1681b9442aaa9755b8",
                q: "",
                image_type: "",
                page: "",
                per_page: ,
                getImages: async function() {
                    console.log("params", this.q, this.image_type);
                    const response = await fetch(
                        `https://pixabay.com/api/?key=${this.api_key}&q=${
                            this.q
                        }&image_type=${this.image_type}&per_page=${this.per_page}&page=${this.page}`
                    );
                    const data = await response.json();
                    this.images = data.hits;
                }
            };
        }
    </script>


    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script>
        var cont=0;
        function loopSlider(){
            var xx= setInterval(function(){
                switch(cont)
                {
                    case 0:{
                        $("#slider-1").fadeOut(400);
                        $("#slider-2").delay(400).fadeIn(400);
                        $("#sButton1").removeClass("bg-purple-800");
                        $("#sButton2").addClass("bg-purple-800");
                        cont=1;

                        break;
                    }
                    case 1:
                    {

                        $("#slider-2").fadeOut(400);
                        $("#slider-3").delay(400).fadeIn(400);
                        $("#sButton2").removeClass("bg-purple-800");
                        $("#sButton1").addClass("bg-purple-800");

                        cont=2;

                        break;
                    }
                    case 2:
                    {

                        $("#slider-3").fadeOut(400);
                        $("#slider-4").delay(400).fadeIn(400);
                        $("#sButton2").removeClass("bg-purple-800");
                        $("#sButton1").addClass("bg-purple-800");

                        cont=3;

                        break;
                    }
                    case 3:
                    {

                        $("#slider-4").fadeOut(400);
                        $("#slider-5").delay(400).fadeIn(400);
                        $("#sButton2").removeClass("bg-purple-800");
                        $("#sButton1").addClass("bg-purple-800");

                        cont=4;

                        break;
                    }
                    case 4:
                    {

                        $("#slider-5").fadeOut(400);
                        $("#slider-6").delay(400).fadeIn(400);
                        $("#sButton2").removeClass("bg-purple-800");
                        $("#sButton1").addClass("bg-purple-800");

                        cont=5;

                        break;
                    }
                    case 5:
                    {

                        $("#slider-6").fadeOut(400);
                        $("#slider-1").delay(400).fadeIn(400);
                        $("#sButton2").removeClass("bg-purple-800");
                        $("#sButton1").addClass("bg-purple-800");

                        cont=0;

                        break;
                    }


                }},8000);

        }

        function reinitLoop(time){
            clearInterval(xx);
            setTimeout(loopSlider(),time);
        }



        function sliderButton1(){

            $("#slider-2").fadeOut(400);
            $("#slider-1").delay(400).fadeIn(400);
            $("#sButton2").removeClass("bg-purple-800");
            $("#sButton1").addClass("bg-purple-800");
            reinitLoop(4000);
            cont=0

        }

        function sliderButton2(){
            $("#slider-1").fadeOut(400);
            $("#slider-2").delay(400).fadeIn(400);
            $("#sButton1").removeClass("bg-purple-800");
            $("#sButton2").addClass("bg-purple-800");
            reinitLoop(4000);
            cont=1

        }

        $(window).ready(function(){
            $("#slider-2").hide();
            $("#slider-3").hide();
            $("#slider-4").hide();
            $("#slider-5").hide();
            $("#slider-6").hide();
            $("#sButton1").addClass("bg-purple-800");


            loopSlider();






        });


    </script>
