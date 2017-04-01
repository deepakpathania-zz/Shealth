<?php
$x = $_GET['x'];
require __DIR__.'/libs/PHPInsight/Autoloader.php';

PHPInsight\Autoloader::register();
$sentiment = new \PHPInsight\Sentiment();

$products=[
			"Olay Total Effects 7 IN ONE Day Cream Touch of Foundation SPF 15",
			"Olay Regenerist Revitalising Hydration Cream SPF 15",
		    "Olay Regenerist Micro-sculpting Cream",
		    "Olay Total Effects 7 in One Anti-ageing Eye Cream",
		    "Olay Regenerist Advance Anti-Ageing Micro-Sculpting Serum",
		    "Olay Regenerist Revitalising Cream Cleanser",
		    "Olay Total Effects 7 in One Foaming Cleanser"
		];

$string=[
			
			"Olay Total Effects 7 IN ONE Day Cream Touch of Foundation SPF 15"=>[
					"",
			],
			"Olay Regenerist Revitalising Hydration Cream SPF 15"=>[
					"Olay is a company famous for its anti-ageing products. Olay Regenerist is an advanced anti-ageing formula as claimed by the company. This product is basically a moisturizer, which the company has rephrased  as revitalizing hydration cream, which if you translate it into English, means moisturization.",
					"For the first time I have applied Olay Regenerist Revitalising Hydration Cream Moisturiser SPF15 during summers and it made my combination skin feel uncomfortable and oily in less than 2 hours(even after setting with powder so forget about layering it with foundation or BB cream). So a big no-no for oily/combination skinned beauties in summers. I gave this one a second try in monsoon/rainy season and it performed better than summers but on a humid day you might not like heavy feeling on skin. So no for oily/combination skinned beauties in monsoon too. Then I gave it a third try since the start of fall season and I liked the hydration it gave to my combination skin in dry weather and since then I am hooked onto it throughout winter. It provides just enough hydration and moisturisation to skin so oily/combination skinned beauties are gonna love it in fall and winters.",
					"I'm 49, caucasion, combination skin- dry around eyes with slightly oily T-zone. I don't wear make-up. Found the Olay:Regenirist revitalizing lotion, 75 mls, with SPF 15, from Priceline a thick liquid. Glides on easily, doesn't drag on cheeks, IS slightly oily on the T-zone (if too much is applied on nose/forehead so go easy) otherwise absorbs well. Lighweight but my skin felt hydrated for oh about 4/5 hrs then felt dry - like I needed more moisturiser. On special so price OK. Yes, I would buy again if on special. I took off 1 star as no visible difference with wrinkles(used 2 months) also I 'm not a fan of pumps-can be wasteful and difficult to control the amount which is probably why so many cosmetic companies now have pumps."
				],
			"Olay Regenerist Micro-sculpting Cream"=>[
					"I purchased this product and put it on before bed. Woke up and my face is red and burnt. Looked at the bottle and it's made in Thailand. Crap product.",
					"I bought this at a very good price of 40% off. It is a very good face cream for all skin type. My skin is dry skin, this cream works really good on me even in Winter.",
					"I am using this cream for about 2 months . the Skin feel soft it doesnt leave a sticky greasing feeling like other expensive cream ,fine lines also improve a lot I also like the packaging I will keep using this product and recomment this excellent cream for my friend . I will look into Chemist Warehouse for cheaper price as other review has posted."
			],
			"Olay Total Effects 7 in One Anti-ageing Eye Cream"=>[
					"Full of chemicals that irritated my skin and stung my eyes, olay headquarters have the worst customer service on the face of this planet!",
					"I find Olay Total Effects Anti-Agening Serum a wonderful product to use under my Olay moisturiser. One doesn't work well without the other. They leave my skin feeling smooth & soft. This feel lasts all day and it doesn't cost a fortune to have your skin feel this way - no rough, dry skin anymore. I have never used foundation so this is all I apply to my face. It feel great!",
					"I would recommend this product for anyone with aging dry skin. It readily sinks into the skin and leaves the face feeling moisturised and soft. The small plastic pump is handy for travellers. It can be used by itself or with a moisturiser. Don't expect any miraculous changes in your skin. The product is kind to the skin and keeps it moisturised and protected, but I don't believe aging is reversible using serums and I haven't seen any signs of this."
			],
			"Olay Regenerist Advance Anti-Ageing Micro-Sculpting Serum"=>[
					"I prefer a serum and this one is ok but not great. The good is the texture, the smell is subtle, and it's gentle. The dispenser gives just the right amount and its a small enough bottle to carry in a gym bag. The top also locks, so you can travel without worrying if it spilling. It's a lightweight bottle. The bad is it doesn't seem to absorb into the skin. It seems to rest on top then disappear. I used it all winter and my face wasn't as moisturised as I felt it needed to be. Especially for a product for slightly older skin, I felt it should ha ve moisturised more. It may be better in the summer when the environment is not as dry. I also wondered about the shimmer it has in it. If they're nano particles, they're bad for the environment. In price, it was at the top end of the lines you can buy in a chemist so not as expensive as premium brands but not cheap either. Overall, I probably won't buy this one again. It's ok but I think there are better serums out there, and this one didn't seem to live up to its hype.",
					"I have been using Olay regenerist products for a many years and enjoy them very much. Last year I bought several bottles and jars from StrawberryNET and a shop in Australia. Unfortunately these bring terrible reaction on my skin: red, chapped, peeling off, scaly, pain...! I have never experienced this before. The two products I tried are Olay Regenerist Wrinkle Relaxing Cream and Olay Regenerist Micro Sculpting Revitalizing Cream. These are all made in Thailand. I have to stop using them now.",
					"I spent a considerable amount of money on this product and have used it daily for two months, I have seen no change at all, fine lines have now appear to look more prominent, it smells like a chemical factory, God knows what the skin is drinking using this."
			],
			"Olay Regenerist Revitalising Cream Cleanser"=>[
					"This product is worth the money & compared to similar products the price is very reasonable and a little goes a long way. Definitely worth buying for nice smooth even looking skin.",
					"After only one day of trying the Olay Regenerist Revitalizing Face Cream I had the worst pimple breakout I have ever had in my life. I used to be prone to acne as a teen but not so bad now in my twenties but today I had a breakout worst than any in my hormonal teen years. My face feels burnt and dried out and extremely tender tender to touch which is embarrassing as I work in customer service. The procuct also made my face feel sweaty and greasy before it began to feel burnt and dry. Would not dare recommend this product.",
					"I'm 49, caucasion, combination skin- dry around eyes with slightly oily T-zone. I don't wear make-up. Found the Olay:Regenirist revitalizing lotion, 75 mls, with SPF 15, from Priceline a thick liquid. Glides on easily, doesn't drag on cheeks, IS slightly oily on the T-zone (if too much is applied on nose/forehead so go easy) otherwise absorbs well. Lighweight but my skin felt hydrated for oh about 4/5 hrs then felt dry - like I needed more moisturiser. On special so price OK. Yes, I would buy again if on special. I took off 1 star as no visible difference with wrinkles(used 2 months) also I 'm not a fan of pumps-can be wasteful and difficult to control the amount which is probably why so many cosmetic companies now have pumps."
			],
			"Olay Total Effects 7 in One Foaming Cleanser"=>[
					"I have been using Olay Total Effects foaming cleanser for three years now. I prefer the soapy, foaming feel rather than a cream. Takes off all makeup except waterproof mascara and leaves my skin feeling soft and clean. Definitely use a moisturiser after. Has helped with my acne problem.",
					"I have been using this cleanser for about 4 weeks now. I dont usually buy it but i was on a holiday island and this was the only one at the supermarket to buy. It is a great no fuss cleanser. You only need a tiny bit or it lathers up too much.",
					"my boyfriend uses this cleanser.. he really likes it, and i must say it does work helping lift dullness..he says it dries his skin out alot though, however he uses the olay moisturiser aswell, so i think it might help a bit to lower the drieness. Overall a fairly good product. will definitely continue to buy it for him."					
			]
		];

$score1 = $sentiment->score($string[$products[$x]][0]);
$score2 = $sentiment->score($string[$products[$x]][1]);
$score3 = $sentiment->score($string[$products[$x]][2]);

$score = ($score1["pos"]-$score1["neg"] + $score2["pos"]-$score2["neg"] + $score3["pos"]-$score3["neg"])/3;

$class = $sentiment->categorise($string[$products[$x]][0]);

// print_r($scores);
if ($score>0) {
	echo "Positive";
}
else{
	echo "Negative";
}

echo "\nScore==> " . ($score);


?>