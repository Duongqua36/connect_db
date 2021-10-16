<div class="quick-search quick-search-dropdown" id="kt_quick_search_dropdown">
    {{-- Form --}}
    <form method="get" class="quick-search-form">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    {{ \App\Classes\Theme\Metronic::getSVG("media/svg/icons/General/Search.svg", "svg-icon-lg") }}
                </span>
            </div>
            <input id="search" name="search" type="text" class="form-control" placeholder="Search..."/>
            <div class="input-group-append">
                <span class="input-group-text">
                    <i class="quick-search-close ki ki-close icon-sm text-muted"></i>
                </span>
            </div>
       	</div>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
    $(document).ready(function (){
   $(document).on('keyup','#search',function (){
       let search = $(this).val();

       $.ajax({
           type: 'get',
           url : '/search',
           data:{
               search:search
           },
               dataType:'json',
               success: function (response){
              $('#listItem').html(response);
               }
       })
   })
    });
</script>
