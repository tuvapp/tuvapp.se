var animData = {
        wrapper: document.getElementById('animation'),
        animType: 'svg',
        loop: true,
        prerender: true,
        autoplay: true,
        path: 'https://res.cloudinary.com/rodetyo/raw/upload/v1462460587/kish.json'
    };
    var anim = bodymovin.loadAnimation(animData);
