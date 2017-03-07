<footer id="site-footer"> 
    <div class="container"> 
        <div class="row"> 
            <span class="divider grey"></span> 
            <h4>2017 Gecko Studios</h4> 
            <a href="#" class="scroll-top"><img src="{{asset('img/top.png')}}" alt="" class="top"></a> 
        </div> 
    </div> 
</footer>

<script src="{{asset('/js/jquery.min.js')}}"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

 
    
   
    <script src="{{asset('/js/stellar.js')}}"></script>
    <script src="{{asset('/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('/js/jquery.easypiechart.min.js')}}"></script>

    <!-- jQuery REVOLUTION Slider  -->
    <script type="text/javascript" src="{{asset('/rs-plugin/js/jquery.themepunch.plugins.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

    <script src="{{asset('/js/waypoints.min.js')}}"></script>

    
    <script src="{{asset('/js/script.js')}}"></script>
    
    <script>
    $(document).ready(function() {
        appMaster.preLoader();
        appMaster.smoothScroll();
        appMaster.animateScript();
        appMaster.navSpy();
        appMaster.revSlider();
        appMaster.stellar();
        appMaster.skillsChart();
        appMaster.maps();
        appMaster.isoTop();
        appMaster.canvasHack();

        $('.home-ad .close').on('click', function(){
            $(this).parent().toggle('fast');
        });
    });
    </script>

</body>
</html>

