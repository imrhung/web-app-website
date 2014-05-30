<div class="jumbotron">
    <form class="form-inline" role="form">
        <div class="form-group">
            <label class="sr-only" for="exampleInputEmail2">Your code</label>
            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Your code">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <div class="clearfix"></div>
    <div class="fb-like-box" data-href="https://www.facebook.com/ChiaSeMoiNgayMotYTuong" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
</div>

<script>
    var page_like_or_unlike_callback = function(url, html_element) {
        console.log("page_like_or_unlike_callback");
        console.log(url);
        console.log(html_element);

    }

    $(document).ready(function() {
//        // In your onload handler
//        FB.Event.subscribe('edge.create', page_like_or_unlike_callback);
//        FB.Event.subscribe('edge.remove', page_like_or_unlike_callback);




    });



</script>