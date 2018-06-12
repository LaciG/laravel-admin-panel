/* gallery */

$(document).ready(function () {

    $('.more, .less').hide();



    var webapp = [];

    var startup = [];

    var social = [];

    var branding = [];



    var filtername = 'all';



    if ($('#startup #gallery-buttons .active').attr('data-filter') == 'startup') {

        filtername = 'startup';

    }



    var images = [];

    var ImagesInRows = 3;

    var CurrentImages = 0;



    webapp[0] = '/assets/portfoliok/web_app/tickething.jpg';

    webapp[1] = '/assets/portfoliok/web_app/salarify.jpg';

    webapp[2] = '/assets/portfoliok/web_app/rendi.jpg';

    webapp[3] = '/assets/portfoliok/web_app/neatly.jpg';

    webapp[4] = '/assets/portfoliok/web_app/aiventure.jpg';

	webapp[5] = '/assets/portfoliok/web_app/15minpizza.jpg';

	webapp[6] = '/assets/portfoliok/web_app/idokep.jpg';

	webapp[7] = '/assets/portfoliok/web_app/tesco.jpg';

	webapp[8] = '/assets/portfoliok/web_app/fintecom.jpg';



    startup[0] = '/assets/portfoliok/startupok/15minpizza.jpg';

    startup[1] = '/assets/portfoliok/startupok/aiventure.jpg';

    startup[2] = '/assets/portfoliok/startupok/kepruhaz.jpg';

    startup[3] = '/assets/portfoliok/startupok/knightscope.jpg';

    startup[4] = '/assets/portfoliok/startupok/neatly.jpg';

    startup[5] = '/assets/portfoliok/startupok/realcrowd.jpg';

    startup[6] = '/assets/portfoliok/startupok/rendi.jpg';

    startup[7] = '/assets/portfoliok/startupok/salarify.jpg';

	startup[8] = '/assets/portfoliok/startupok/tickething.jpg';

	startup[9] = '/assets/portfoliok/startupok/coinpay.jpg';

	startup[10] = '/assets/portfoliok/startupok/studio1.jpg';



    social[0] = '/assets/portfoliok/social/15minpizza.jpg';

    social[1] = '/assets/portfoliok/social/honda.jpg';

    social[2] = '/assets/portfoliok/social/kartago.jpg';

    social[3] = '/assets/portfoliok/social/newsonia.jpg';

    social[4] = '/assets/portfoliok/social/playboy.jpg';

    social[5] = '/assets/portfoliok/social/szeretlek_magyar_csapat.jpg';



    branding[0] = '/assets/portfoliok/logo_branding/tickething.jpg';

    branding[1] = '/assets/portfoliok/logo_branding/rose_deluxe.jpg';

    branding[2] = '/assets/portfoliok/logo_branding/rendi.jpg';

    branding[3] = '/assets/portfoliok/logo_branding/neatly.jpg';

    branding[4] = '/assets/portfoliok/logo_branding/365flow.jpg';

    branding[5] = '/assets/portfoliok/logo_branding/15minpizza.jpg';



    images = CollectImages(filtername);

    ShowImages(images, ImagesInRows);



    $("#gallery .filter-button").click(function () {

        filtername = $(this).attr('data-filter');



        images = CollectImages(filtername);

        ShowImages(images, ImagesInRows);

    });



    function CollectImages(filtername) {

        images = [];



        switch (filtername) {

            case 'webapp':

                images = webapp;

                break;

            case 'startup':

                images = startup;

                break;

            case 'social':

                images = social;

                break;

            case 'branding':

                images = branding;

                break;

            default:

                images = images.concat(webapp);

                images = images.concat(startup);

                images = images.concat(social);

                images = images.concat(branding);

        }



        return images;

    }



    function ShowImages(images, ImagesInRows) {

        var items = images.length;

        var LangObject = GalleryLang;

        var MainTitle = null;

        var SubTitle = null;



        if (items > 0) {

            var div1 = document.createElement('div');



            $("#gallery_content").empty();

            CurrentImages = 0;

            for (i = 0; i < ImagesInRows && i < images.length && i < LangObject[filtername].length; i++) {

                $(".gallery_one").attr('src', images[i]);

                MainTitle = LangObject[filtername][i][0];

                SubTitle = LangObject[filtername][i][1];

                $('.image_title').html(MainTitle);

                $('.image_subtitle').html(SubTitle);

                div1.innerHTML += document.getElementById('imgtemplate').innerHTML;

                CurrentImages++;

            }

            document.getElementById('gallery_content').appendChild(div1);



            if (items > CurrentImages) {

                $('.more').show();

            } else {

                $('.more').hide();

            }

            if (CurrentImages > 3) {

                $('.less').show();

            } else {

                $('.less').hide();

            }



        } else {

            alert('No images...')

        }

    }



    $('.more').click(function () {

        var ImageAdd = CurrentImages + ImagesInRows;

        images = CollectImages(filtername);

        ShowImages(images, ImageAdd);

    });



    $('.less').click(function () {

        var ImageAdd = CurrentImages - ImagesInRows;

        images = CollectImages(filtername);

        ShowImages(images, ImageAdd);

    });

});



$(document).ready(function(){

		var imgSrcArray = $('img');

	for (var i = 0; i < imgSrcArray.length; i++){

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/web_app/tickething.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Tickething weboldal');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/web_app/salarify.jpg'){

			$(imgSrcArray[i]).attr('alt', ' Salarify weboldal és alklamazás');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/web_app/rendi.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Rendi weboldal');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/web_app/neatly.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Neatly weboldal');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/web_app/aiventure.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Aiventure weboldal');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/web_app/15minpizza.jpg'){

			$(imgSrcArray[i]).attr('alt', '15minutespizza weboldal');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/web_app/tesco.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Tesco iBevásárlás weboldal');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/web_app/idokep.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Időkép weboldal');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/web_app/fintecom.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Fintecom weboldal');

		}

		

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/startupok/15minpizza.jpg'){

			$(imgSrcArray[i]).attr('alt', '15minutespizza - 15percen belül a pizza az otthonodban van.');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/startupok/aiventure.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Aiventure');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/startupok/kepruhaz.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Képáruház');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/startupok/knightscope.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Knightscope');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/startupok/neatly.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Neatly - mosás/vasalás');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/startupok/realcrowd.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Realcrowd');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/startupok/rendi.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Rendi - Takarítónő házhoz');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/startupok/salarify.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Salarify');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/startupok/tickething.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Tickething - Jegyárusítás');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/startupok/coinpay.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Coinpay');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/startupok/studio1.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Studio1');

		}

		

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/social/15minpizza.jpg'){

			$(imgSrcArray[i]).attr('alt', '15minutespizza - Facebook & Instagram oldal kezelés és tartalom előállítás');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/social/honda.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Honda - Facebook oldal kezelés és tartalom előállítás');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/social/kartago.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Kartago - Facebook oldal kezelés és tartalom előállítás');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/social/newsonia.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Newsonia - Facebook oldal kezelés és tartalom előállítás');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/social/playboy.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Playboy - Facebook oldal kezelés és tartalom előállítás');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/social/szeretlek_magyar_csapat.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Szeretlek magyar csapat - Facebook oldal kezelés és tartalom előállítás');

		}

		

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/logo_branding/tickething.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Tickething logo ás brand');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/logo_branding/rose_deluxe.jpg'){

			$(imgSrcArray[i]).attr('alt', 'RoseDeluxe logo ás brand');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/logo_branding/rendi.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Rendi logo ás brand');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/logo_branding/neatly.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Neatly logo ás brand');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/logo_branding/365flow.jpg'){

			$(imgSrcArray[i]).attr('alt', '365flower logo ás brand');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/logo_branding/15minpizza.jpg'){

			$(imgSrcArray[i]).attr('alt', '15minutespizza logo ás brand');

		}	

	}

    $('.more, .less, .filter-button').click(function(){

			imgSrcArray = $('img');

	for (var i = 0; i < imgSrcArray.length; i++){

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/web_app/tickething.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Tickething weboldal');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/web_app/salarify.jpg'){

			$(imgSrcArray[i]).attr('alt', ' Salarify weboldal és alklamazás');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/web_app/rendi.jpg'){

			$(imgSrcArray[i]).attr('alt', '/Rendi weboldal');

		}

		if($(imgSrcArray[i]).attr('src') == 'assets/portfoliok/web_app/neatly.jpg'){

			$(imgSrcArray[i]).attr('alt', '/Neatly weboldal');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/web_app/aiventure.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Aiventure weboldal');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/web_app/15minpizza.jpg'){

			$(imgSrcArray[i]).attr('alt', '15minutespizza weboldal');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/web_app/fintecom.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Fintecom weboldal');

		}

		

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/startupok/15minpizza.jpg'){

			$(imgSrcArray[i]).attr('alt', '15minutespizza - 15percen belül a pizza az otthonodban van.');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/startupok/aiventure.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Aiventure');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/startupok/kepruhaz.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Képáruház');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/startupok/knightscope.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Knightscope');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/startupok/neatly.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Neatly - mosás/vasalás');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/startupok/realcrowd.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Realcrowd');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/startupok/rendi.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Rendi - Takarítónő házhoz');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/startupok/salarify.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Salarify');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/startupok/tickething.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Tickething - Jegyárusítás');

		}

		

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/social/15minpizza.jpg'){

			$(imgSrcArray[i]).attr('alt', '15minutespizza - Facebook & Instagram oldal kezelés és tartalom előállítás');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/social/honda.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Honda - Facebook oldal kezelés és tartalom előállítás');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/social/kartago.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Kartago - Facebook oldal kezelés és tartalom előállítás');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/social/newsonia.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Newsonia - Facebook oldal kezelés és tartalom előállítás');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/social/playboy.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Playboy - Facebook oldal kezelés és tartalom előállítás');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/social/szeretlek_magyar_csapat.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Szeretlek magyar csapat - Facebook oldal kezelés és tartalom előállítás');

		}

		

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/logo_branding/tickething.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Tickething logo ás brand');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/logo_branding/rose_deluxe.jpg'){

			$(imgSrcArray[i]).attr('alt', 'RoseDeluxe logo ás brand');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/logo_branding/rendi.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Rendi logo ás brand');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/logo_branding/neatly.jpg'){

			$(imgSrcArray[i]).attr('alt', 'Neatly logo ás brand');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/logo_branding/365flow.jpg'){

			$(imgSrcArray[i]).attr('alt', '365flower logo ás brand');

		}

		if($(imgSrcArray[i]).attr('src') == '/assets/portfoliok/logo_branding/15minpizza.jpg'){

			$(imgSrcArray[i]).attr('alt', '15minutespizza logo ás brand');

		}	

	}

    });

});



