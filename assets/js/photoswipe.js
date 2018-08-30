function popAlbum(id) {
    var pswpElement = document.querySelectorAll('.pswp')[0];
    axios({
            method: 'get',
            url: 'includes/photoswipe/photoswipe.php?id=' + id,
        })
        .then(function(response) {
            var items = response.data;
            console.log(response);
            // define options (if needed)
            var options = {
                // history & focus options are disabled on CodePen        
                history: false,
                focus: false,

                showAnimationDuration: 0,
                hideAnimationDuration: 0

            };
            var gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
            gallery.init();
        })
        .catch(function(error) {
            // handle error
            console.log(error);
        });

};