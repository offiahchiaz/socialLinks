require('./bootstrap');


$('.user-link').click(function(e) {
    const linkId = $(this).data('link-id');
    const linkUrl = $(this).attr('href');

    // Store the visit asynchronously without interrupting the link opening
    axios.post('/visit/' + linkId, {
        link: linkUrl
    })
        .then(response => console.log('response: ', response))
        .catch(error => console.log('error: ', error));

});