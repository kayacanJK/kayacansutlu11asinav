     <!-- footer area start-->
     <footer>
        <div class="footer-area">
            <p class="">© Copyright 2023<a href="#">  KAYA CAN</a>.</p>
        </div>
    </footer>
    <!-- footer area end-->
</div>
<!-- page container area end -->
<!-- offset area start -->

<!-- offset area end -->
<!-- jquery latest version -->
<script src="{{asset('admintema')}}/assets/js/vendor/jquery-2.2.4.min.js"></script>
<!-- bootstrap 4 js -->
<script src="{{asset('admintema')}}/assets/js/popper.min.js"></script>
<script src="{{asset('admintema')}}/assets/js/bootstrap.min.js"></script>
<script src="{{asset('admintema')}}/assets/js/owl.carousel.min.js"></script>
<script src="{{asset('admintema')}}/assets/js/metisMenu.min.js"></script>
<script src="{{asset('admintema')}}/assets/js/jquery.slimscroll.min.js"></script>
<script src="{{asset('admintema')}}/assets/js/jquery.slicknav.min.js"></script>

<!-- start chart js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<!-- start highcharts js -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<!-- start zingchart js -->
<script src="https://cdn.zingchart.com/zingchart.min.js"></script>
<script>
zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
</script>
<!-- all line chart activation -->
<script src="{{asset('admintema')}}/assets/js/line-chart.js"></script>
<!-- all bar chart activation -->
<script src="{{asset('admintema')}}/assets/js/bar-chart.js"></script>
<!-- all pie chart -->
<script src="{{asset('admintema')}}/assets/js/pie-chart.js"></script>
<!-- others plugins -->
<script src="{{asset('admintema')}}/assets/js/plugins.js"></script>
<script src="{{asset('admintema')}}/assets/js/scripts.js"></script>
@yield('js')
</body>

</html>
