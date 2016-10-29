var request = require('request');
var TelegramBot = require('node-telegram-bot-api');
var YandexTranslator = require('yandex.translate');
var translate = require('yandex-translate')('trnsl.1.1.20160814T030040Z.8d320379d747e007.8104bd6ee8d6f3b0a27556f65d33d736a04a2d7c');

var options = {
    polling: true
};
var mood = null;
var res = '';
var llll = '';
var ak = 'b7d11214c8fc452db3de12028cf46daa';
var sk = '64631fe987f4423bb0a117101bf90a45'
var ocr = require('./ocr.js').create(ak, sk);
var a = [
    ['toilet-rest-area', 'pharmacy'],
    ['hospital-health-care-facility']
];
var b = [
    ['0-3', '>3']
];
var c = [
    ['Yes', 'No']
];
var d = [
    ['yes', 'no']
];
var e = [
    ['Oily', 'Dry'],
    ['Normal']
]
var ctr = 0;
var modify = false;
var token = '290276604:AAHo56bDi_Fr8J9BCeKfJPRWwROOoYRFi8Y';
var deal = 0;
var bot = new TelegramBot(token, options);
bot.getMe().then(function(me) {
    console.log('Hi my name is %s!', me.username);
});

bot.onText(/\/search/, function(msg) {
    var chatId = msg.chat.id;
    var opts = {
        reply_to_message_id: msg.message_id,
        reply_markup: JSON.stringify({
            keyboard: a
        })
    };
    bot.sendMessage(chatId, 'Select your preference ', opts);
    console.log(msg);
});

bot.onText(/\/survey/, function(msg) {
    console.log("ctr : " +ctr);
    var chatId = msg.chat.id;
    var opts = {
        reply_to_message_id: msg.message_id,
        reply_markup: JSON.stringify({
            keyboard: b
        })
    };
    bot.sendMessage(chatId, 'Let us start the tampax survey then. How many hours did you wear the tampon? Select your preference. ',opts); 
    console.log("survey started");
    
    console.log("msg : " + msg.text);
    if(msg.text == '0-3'|| msg.text == '>3' || ctr==0) {
    console.log(msg.text);
    ctr=1;
    console.log("ctr : " +ctr);
    }
});
bot.onText(/\/change/, function(msg) {
    var chatId = msg.chat.id;
    var opts5 = {
        reply_to_message_id: msg.message_id,
        reply_markup: JSON.stringify({
            keyboard: e
        })
    };
    bot.sendMessage(chatId, 'Select your preference to modify the prooducts you get.', opts5);
    modify = true;

});
bot.onText(/\/distance (.+)/, function(msg) {
    var chatId = msg.chat.id;
    bot.sendMessage(chatId, " Here's your path to it : https://www.google.co.in/maps/dir/28.555+,77.2647+/'28.54675,77.25031'/");
});
// bot.onText(/\/video (.+)/, function(msg, match) {
//     var chatId = msg.chat.id;
//     var resp = match[1];
//     var str = "How are you doing today?";
//     var res = match[1].split(" ");
//     var v = (res[0].split("v="))[1].split("&")[0];
//     var url = 'https://www.youtube.com/api/timedtext?v='+v+'&lang=en' 
//     request.get({
//             url: url,
//             json: true
//         },
//         function(error, response, body) {
//             if (!error && response.statusCode == 200) {
//                 z = JSON.stringify(body, null, 2);
//                 z = z.toLowerCase();
//                 var array = z.split('<text start=\\"');
//                 var k = [];
//                 for (var i = 0, j = 0; i <= array.length - 1; i++) {
//                     var a = JSON.stringify(array[i]);
//                     if (a.indexOf(res[1]) != -1) {
//                         mime = a.split("\\");
//                         slime = mime[0].split('\"');
//                         fime = slime[1].split('.');
//                         k[j] = fime[0];
//                         j++;
//                         var myJsonString = JSON.stringify(k);
//                     }
//                 }

//             }

//            var spl = myJsonString.split("\"");
//            var nums = [];
//            var i = 1
//            while(i < spl.length - 1){
//             nums.push(parseInt(spl[i]));
//             i += 2
//            }
//            console.log(typeof(nums));
//            console.log(nums[0]);
//            var links = "";
//            for(b = 0; b<nums.length && b<7; b++){
//             links += b+1 + " .) " + res[0] + "&t=" + nums[b] + "\n";
//            }

//             bot.sendMessage(chatId, links);
//            var v = (res[0].split("v="))[1].split("&")[0];
//             console.log(v);
//         })
// });

bot.onText(/\/products/, function(msg) {
    var chatId = msg.chat.id;
    deal = 1;
    bot.sendMessage(chatId, "Now i would like to access your location.")
});
bot.on('message', function(msg) {
    var chatId = msg.chat.id;
    var flag = false;
    console.log("ctr : " +ctr);
    if(ctr==1){
        console.log("in second");
        var chatId = msg.chat.id;
        var opts2 = {
            reply_to_message_id: msg.message_id,
            reply_markup: JSON.stringify({
            keyboard: c
                })
            };
    if(ctr==1) {
    bot.sendMessage(chatId, 'Did you experience any leak ?  Select your preference ', opts2);
    }
    console.log("msg : " + msg.text);
    console.log(" ctr value : " +ctr);
    ctr=-1;
    
   } 
//     function callThird(msg) {
//     if(ctr==2)  {
//         var chatId = msg.chat.id;
//         var opts3 = {
//             reply_to_message_id: msg.message_id,
//             reply_markup: JSON.stringify({
//             keyboard: d
//                 })
//             };
//     console.log("ctr : " +ctr);
//     bot.sendMessage(chatId, 'Do you experience any discomfort while removing the tampon ?  Select your preference ', opts3);
//     console.log("message in third : " +msg.text);
//     if((msg.text == 'yes' || msg.text=='no')  || ctr==2) { 
//     console.log("new message in third : " +msg.text);
//       ctr=3;
//       callFourth(msg);
//         console.log(" new msg : " +msg.text);   
//         }
//    }
// }
// function callFourth(msg) {
//     if(ctr==3) {
//     var chatId = msg.chat.id;
//     bot.sendMessage(chatId, "Thanks for taking the survey.");
//     ctr=-1;
//     }
// }
    // if(deal==2) {
    //     var chatId = msg.chat.id;
    //     var opts4 = {
    //         reply_to_message_id: msg.message_id,
    //         reply_markup: JSON.stringify({
    //         keyboard: e
    //             })
    //         };
    // bot.sendMessage(chatId, 'Did you experience any leak ?  Select your preference ', opts2);
    // }
    if (msg.text != undefined) {
        var i = 0;
        while (i < a.length) {
            if (a[i].indexOf(msg.text) != -1) {
                flag = true;
                break;
            }
            i += 1;
        }
    }
    if (flag) {
        flag = false;
        mood = msg.text;
        console.log("Messge is : " + msg);
      bot.sendMessage(chatId, "Perfect now i would be able to send you the results around you once you share your location.");
    }
    if (msg.location != undefined && (mood != null || deal == 1)) {
        if (mood != null) {

            console.log(mood, 'latitude', msg.location.latitude);
            console.log(mood, 'longitude', msg.location.longitude);
            request({
                url: 'https://places.demo.api.here.com/places/v1/discover/explore?at=' + msg.location.latitude + ',' + msg.location.longitude + '&cat=' + mood + '&app_id=qWWMtPTtoZAUNjN8FRqj&app_code=_Vidf-iou_-XwDu-27uF8A',
                json: true
            }, function(error, response, body) {
                if (!error && response.statusCode == 200) {
                    console.log(body.results.items);
                    var k = body.results.items;
                    if (k.length > 7) k.length = 7
                    for (var i = 0; i < k.length; i++) {
                        res = res.concat(i + 1);
                        res = res.concat(') ');
                        res = res.concat(body.results.items[i].title);
                        res = res.concat(' - ');
                        res=res.concat(body.results.items[i].distance);
                        res=res.concat(" m");
                        res = res.concat('\n');
                    }
                    bot.sendMessage(chatId, res);
                    res = '';

                }
            })
            mood = null;
        }
        if (deal == 1) {
            console.log('got your deal');

            deal = 0;
            request({
                url: 'http://polypolymer.xyz/api/v1/listing/mint',
                json: true
            }, function(error, response, body) {
                    var ll = body['data'].length;
                    console.log("ll : " +ll);
                  
                        // link = body['data'][z]['link'];
                        bot.sendMessage(chatId, "Sending you results as per your last chosen skin type. Go to /change to change it.");
                        for(var z= 1; z<5;z++) {
                        console.log(body['data'][z]);
                        // m = z + 1;
                        // var image = __dirname+'deals/1.PNG';;
                        // bot.sendPhoto(chatId, image, { caption: body['data'][0]['price'] });
                        // bot.sendPhoto({
                        //   chatId: msg.chat.id,
                        //   photo: image,
                        //   caption: body['data'][0]['price']
                          
                        // }, function(err, msg) {
                        //   console.log(err);
                        //   console.log(msg);
                        // })
                        bot.sendMessage(chatId, "Description : " + body['data'][z]['long_description'] + "\n Rating : " + (Math.random()*(100-50)+ 50));
                    
                }
            })
        }
    }
    // if (msg.photo != undefined) {
    //     length = msg.photo.length;
    //     console.log(msg.photo[length - 1].file_id);
    //     request({
    //         url: 'https://api.telegram.org/bot198085265:AAFygFU7n37DMDSRZPnRVpnkpK6s2zEA4jo/getFile?file_id=' + msg.photo[length - 1].file_id,
    //         json: true
    //     }, function(error, response, body) {
    //         if (!error && response.statusCode == 200) {
    //             llll = 'https://api.telegram.org/file/bot198085265:AAFygFU7n37DMDSRZPnRVpnkpK6s2zEA4jo/' + body.result.file_path;
    //         }
    //     })
    // }
    if(modify==true) {
        bot.sendMessage(chatId, "Thanks. Your preference has been updated.");
        modify = false;
    }
    if (msg.text == 'translate to english') {
        console.log(msg.text)
        ocr.scan({
            url: llll,
            type: 'text',
        }).then(function(result) {

            translate.translate(result.results.words, { to: 'en' }, function(err, res) {
                var a = res.text;
                console.log(a);
                bot.sendMessage(chatId, a[0]);
            });
        }).catch(function(err) {
            console.log('err', err);
        })
    } else if (msg.text == 'translate to hindi') {
        ocr.scan({
            url: llll,
            type: 'text',
        }).then(function(result) {

            translate.translate(result.results.words, { to: 'hi' }, function(err, res) {
                var a = res.text;
                console.log(a);
                bot.sendMessage(chatId, a[0]);
            })
        })
    }else if (msg.text == 'translate to tamil') {
        ocr.scan({
            url: llll,
            type: 'text',
        }).then(function(result) {

            translate.translate(result.results.words, { to: 'ta' }, function(err, res) {
                var a = res.text;
                console.log(a);
                bot.sendMessage(chatId, a[0]);
            })
        })
    }
});
