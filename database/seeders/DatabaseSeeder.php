<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;
use App\Models\User;
use App\Models\Visitor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admins = [
            [
                'name' => 'Elena',
                'email' => 'lena_helen_b@mail.ru',
                'password' => Hash::make('123123123'),
                'is_admin' => 1,
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
            ],
        ];
        foreach ($admins as $admin) {
            User::create($admin);
        }
        $categories = [
            ['title' => 'Fashion'],
            ['title' => 'Food'],
            ['title' => 'Travel'],
            ['title' => 'Music'],
            ['title' => 'Lifestyle'],
            ['title' => 'Sport'],
        ];
        foreach ($categories as $category) {
            Category::create($category);
        }
        $categories = Category::all();
        $tags = [
            ['title' => 'Dinner'],
            ['title' => 'Breakfast'],
            ['title' => 'Recipes'],
            ['title' => 'Guide'],
            ['title' => 'Life'],
            ['title' => 'Fitness'],
            ['title' => 'Health'],
            ['title' => 'Nutrition'],
            ['title' => 'Weight'],
            ['title' => 'Home'],
            ['title' => 'Inspiration'],
            ['title' => 'Jewelry'],
            ['title' => 'Fashion'],
            ['title' => 'Friend'],
        ];
        foreach ($tags as $tag) {
            Tag::create($tag);
        }
        $tags = Tag::all();
        $visitors = [
            [
                'name' => 'Alice',
                'email' => 'alice_blume@mail.com',
            ],
            [
                'name' => 'Lina',
                'email' => 'lina_h@mail.com',
            ],
            [
                'name' => 'Jack',
                'email' => 'lack-ad@mail.com',
            ],
        ];
        foreach ($visitors as $visitor) {
            Visitor::create($visitor);
        }
        $visitors = Visitor::all();
        $posts = [
            [
                'title' => '20 Stylish Fall Outfit Ideas',
                'content' => 'It’s been a heck of a year/summer, and I know I’m not alone in saying I am SO excited that next week is September, which equals fall! Fall is, hands down, my favorite time of year. I love the weather, the leaves changing, and most of all, the fashion (obviously). Jackets, sweaters, booties, layers—fall itself is so versatile and full of endless cozy outfit options!

Today, I wanted to share my excitement for the impending fall season by sharing just a portion of my fall favorites. Over the knee boots, cozy sweaters, cardigans, scarves, fall hats, dresses, and skirts—I could go on but I have to stop somewhere. Browse it all below and start planning your fall wardrobe now!

For outfit details, just click the image and you\'ll be directed to all the product links.',
                'category_id' => $categories->find(1)->id,
                'path_image' => 'assets/images/1.jpg',
            ],
            [
                'title' => 'My Everyday Jewelry',
                'content' => 'Recently, I\'ve been asked tons of questions about my jewelry. It\'s rare that I will wear all these pieces at once, but as with everything, there are some go-to pieces that I won\'t take off. Some of these items I\'ve had for years, and others are fairly new; Some were gifted or milestone pieces, as well as investment items, or just fun fashion jewelry. I\'ve assembled a list of the essentials here, but there are some that I remove and others I don\'t. Keep reading to find out a little more about each pieces from my everyday jewelry and a discount code at the end for Miranda Frye jewelry!

And my key to keeping all my jewelry, especially rings, looking perfectly clean, is this dazzle pen! Trust me, its THE BEST cleaner!',
                'category_id' => $categories->find(1)->id,
                'path_image' => 'assets/images/2.jpg',
            ],
            [
                'title' => 'Creamy Kale Pasta',
                'content' => 'Let me paint a picture for you: chewy bowtie pasta, coated in a light, salty, barely-creamy sauce, flecked with red pepper flakes and little bits of tender sautéed garlic kale. Oooo-eee! This kale pasta is yummy.

The general mood of this meal is just beautiful and simple, which is… kind of how I’m doing life lately. Taking things back to the basics, not overcomplicating, working in lots of lovely and wholesome ingredients (kale, we see you), going big on flavor and texture without long ingredient lists or hours of work.

Let’s talk about the creamy-but-just-barely-there sauce that pulls this whole thing into a bowl of comfort food. It’s a food processor sauce (of course it is, this is how I operate) made of: pine nuts, capers or olives, herbs, olive oil, lemon juice, salt, pepper.',
                'category_id' => $categories->find(2)->id,
                'path_image' => 'assets/images/3.jpg',
            ],
            [
                'title' => 'Rich chocolate tart',
                'content' => 'Simply place all the base ingredients into a food processor.
pulse until a crumbly mixture forms.
pour the base mixture into a lined cake tin and press down hard.
leave in the freezer to set for 10 minutes.
place all of the filling ingredients into a small pan over a low heat and stir until melted, ensuring not to bring it to the boil.
once everything has melted, pour the filling over the base layer.
place back in the fridge to set for 1-2 hours.',
                'category_id' => $categories->find(2)->id,
                'path_image' => 'assets/images/4.jpg',
            ],
            [
                'title' => 'Keepers of Ganesh: The Vanishing Art of Mahout',
                'content' => 'MOST MORNINGS, THEY MEET IN THE FOREST AS THE NIGHT SOUNDS WANE AND CROWS OF ROOSTERS MARK DAYBREAK. THE BLACK SKY BECOMES A TINTED BLUE, THE WHITE SHARP SHAPES OF THE DISTANT HIMALAYA POKE OUT FROM THE RIVER MIST THAT RISES INTO THE COOL AIR AND SPILLS OUT OVER THE NEARBY MEADOW.
Surya, a massive Asian elephant tusker, can hear Faridul, his lanky, soft-spoken mahout of over 14 years, long before he enters the single trail that winds into the protected forest at this national park in North Bengal, India.

They greet one another with a quiet knowing, stroke of hand, wag of tail. Surya kneels to the ground and patiently waits as Faridul makes a nimble climb up the hindquarters, settling on his broad back. The sun breaks through the clouds and the two wind their way, meeting up with the other elephants and men returning from night patrol.',
                'category_id' => $categories->find(3)->id,
                'path_image' => 'assets/images/5.jpg',
            ],
            [
                'title' => 'Warm Waters',
                'content' => 'WARM WATERS is a long-term photographic project investigating the impacts of climate change on the vulnerable communities and environments throughout the Pacific Region. From rising sea levels and the effects of increasingly extreme weather effects, such as El Niño and super typhoons, to floods and droughts, the destruction of coast, and the first climate refugees — I am collecting visual evidence of what is happening on the front lines of man-made global warming today, and how these phenomena are being dealt with. ABOVE: Residents of the South Tarawa Atoll in Kiribati, bathing in the lagoon near the town of Bairiki. Seawalls protect the tiny islets of the atoll from the rising sea levels, however, many of them are constantly destroyed by high tides. (South Tarawa, Kiribati). ABOVE: Dead coconut trees on the atoll of Abaiang, in an area of land where soils have become increasingly eroded and salinated by the regular flooding that occurs during high tides. Abaiang is one of Kiribati’s most threatened threatened islands. The government says this area is a “barometer for what Kiribati can expect in the future.” Since the 1970s the residents of Tebunginako have seen the sea levels rise and today a major part of the village has had to be abandoned. (Tebunginako, Kiribati)
Since 2013 I have travelled across most of the countries in Oceania—covering sea level rise in Tuvalu, Kiribati, Tokelau and the Marshall Islands, land grabs and related climate change issues in Papua New Guinea, super cyclones in Vanuatu, Tuvalu and Fiji, and climate change related migrations in Solomon Islands. One of the biggest issues facing mankind today, I aim to document climate change through the prism of communities whose very existence is threatened. Warm Waters shows that global warming is not a distant reality for future generations, but a critical issue for which we must all take collective responsibility and immediate action.',
                'category_id' => $categories->find(3)->id,
                'path_image' => 'assets/images/6.jpg',
            ],
            [
                'title' => 'In Search of Warriors',
                'content' => 'This is a tale I have replayed so often since childhood, that when I close my eyes, the characters appear, fully defined, as if I could touch them. At the center is my grandfather, Louis, a young French soldier fighting in World War II. I see him then in black and white, even though when he sat me on his knee, decades later, to tell his story, he was colorful in every way imaginable. It was as if my grandfather had grown up through a period of time when everything existed only in shades of black and grey, as if the entire world with its violence and scarcity had the color sucked right out of it.But then he would tell the part about the Mongol army. About how he was captured and sent to a German prison camp with British, American, and French soldiers. How the camp was eventually liberated, late in 1944, by a small and mighty troop fighting alongside the Allies against the Germans. They were the Mongolian People’s Army, established as a secondary army under Soviet command. As a young child, to hear my grandfather tell it, these liberators loomed large in vibrant, audacious color, a brilliant contrast to the stark landscape that surrounded them all. I was seven or eight years old when my grandfather would tell me this story, and I remember the grin on his face and the tears in his eyes as he told his tale: “The Mongol army charged the prison and the Germans were scared to death at the sight of them. Never before had anyone seen a people like this. They were fierce and the Germans ran away. They ran for their lives.” He told me that afterwards the freed soldiers and the Mongols kept hugging one other and celebrated long into the night.
This is how my grandfather’s life was saved.

As a young boy this account had a massive impact on me. That mysterious Mongol Army of men who saved my grandfather’s life; they saved my life.',
                'category_id' => $categories->find(3)->id,
                'path_image' => 'assets/images/7.jpg',
            ],
            [
                'title' => 'Billy Strings Announces The Deja Vu Experiment Livestreams at The Cap',
                'content' => 'd performed at the same venue back in 1971.

During the 1971 shows, the Grateful Dead conducted ESP Experiments, prompting Deadheads in the audience to focus on imagery shown by the band and telepathically send the imagery to a test subject.

The Deja Vu Experiment is aiming to similarly tap into a sense of clairvoyance and togetherness by asking the streaming audience to use their minds to collectively “see” and send imagery to special guest receivers.

They explain that this experiment is a bit of a “hypothesis that the collective mind has the power to tap into extrasensory perception and manifest connection” and that the livestreams will be a good way to test that theory.',
                'category_id' => $categories->find(4)->id,
                'path_image' => 'assets/images/8.jpg',
            ],
            [
                'title' => 'Watch Lil Nas X on Hot Ones Thanksgiving Special',
                'content' => 'Happy Thanksgiving, y’all. Today we were blessed with a new episode of Hot Ones, the show with hot questions and even hotter wings. Lil Nas X is the guest and he goes hard on the last dab in a way that puts others to shame.',
                'category_id' => $categories->find(4)->id,
                'path_image' => 'assets/images/9.jpg',
            ],
            [
                'title' => 'Finding Beethoven: recent work in the catalogue',
                'content' => 'In Spring 2020, music cataloguers working from home were temporarily without access to the British Library catalogue. Our Collection Metadata colleagues were able to supply us with some exported files of catalogue records to work on, and we chose to have sets of records with Ludwig van Beethoven as composer. While our normal work of cataloguing new acquisitions was suspended, due to the closure of the Library site, we set to work improving the quality of these Beethoven records, as a way of working productively at home, and also of celebrating Beethoven\'s anniversary year in a practical way. The work  complements other departmental activities to mark the anniversary such as the online Beethoven exhibition on Discovering Music, which was launched last month.

    About 2000 amended records have now been loaded back into the catalogue. Although there is more work to do, this is a big step towards improving our representation of Beethoven\'s works.',
                'category_id' => $categories->find(4)->id,
                'path_image' => 'assets/images/10.jpg',
            ],
            [
                'title' => 'HOW TO START A LIFESTYLE BLOG',
                'content' => 'This simple tutorial will walk you through how to start a lifestyle blog from scratch.

I’ll cover how to start your blog, lifestyle blog ideas, how to make money and what mistakes to avoid.

Starting a blog is fantastic. You can start a lifestyle blog and build it to a full time income!

But I totally get how easy it can be to feel overwhelmed. Been there, done that. And guess what happened because of it? Nothing good.

Do you want to know what I do now to overcome my “brain obstacles” when they occur?

I’ll spill all the beans later on in the post, but first – let’s understand how to start a lifestyle blog so you don’t get stuck or overwhelmed.',
                'category_id' => $categories->find(5)->id,
                'path_image' => 'assets/images/11.jpg',
            ],
            [
                'title' => 'We Spoke to 5 People About Adoption',
                'content' => 'Biology has very little to do with a parent’s capacity to love and care for a child and there are more ways to mother a child beyond carrying one in your own body.

It can also be the most incredibly enriching life experience.
Adoption can quite literally change the course of a child’s life and whilst the process can be an emotional rollercoaster of a journey, it can also be the most incredibly enriching life experience.

Here, we speak to five people about their stories and what adopting has meant for them, as well as some of the invaluable advice they’ve picked up along the way.',
                'category_id' => $categories->find(5)->id,
                'path_image' => 'assets/images/12.jpg',
            ],
            [
                'title' => 'Between You And Me Answering Your Problems Part 12',
                'content' => 'Welcome back to our monthly check-in otherwise known as Between You And Me – chatty confidential advice from your friendly neighbourhood twenty/thirty-somethings on this cosy corner of the internet.

In this month’s BYAM, we’re talking overprotective parents, coping with the prospect of another Hokey Cokey year in and out of lockdowns, flaky dads cancelling plans on the regs, letting go of a relationship for travel plans and reservations about going on the pill.

If you’re in a bit of a tizzy about something and you’d like to ask WWYD, email in to betweenyouandme@zoella.co.uk and we’ll do our best to come back with some solid life advice.',
                'category_id' => $categories->find(5)->id,
                'path_image' => 'assets/images/13.jpg',
            ],
            [
                'title' => 'WEEKLY WORKOUT SCHEDULE',
                'content' => 'Week 1 of the LSF 30 Challenge: complete! We are so freaking proud of you babes for crushing this first week! Seriously, the motivation and dedication from you ladies so far is 😍 We couldn’t be more impressed!

There are so many new babes joining #TeamLSF on the daily, so make sure to check out the community hashtags and get connected with more incredible women in this community! We can’t wait for the rest of this month to continue. And (if you need anymore motivation) don’t forget about the $2,500 cash GRAND PRIZE that will go to one of you babes!! Let’s do this! Okay girl, if you haven’t joined the challenge yet, what are you waiting for?! For the next month, we’re going to sweat it out, start this year with clean nutrition and get in lots of acts of self care during the brand new LSF 30 Challenge! This challenge is completely free and gives you 30 days of workouts, recipes and a 2 day detox, and tons of self care ideas! Get ready to kick off 2021 right! Want more details? Check out the LSF 30 blog post to learn more and sign up!

Start this workout plan for women and get ready to see change!',
                'category_id' => $categories->find(6)->id,
                'path_image' => 'assets/images/14.jpg',
            ],
            [
                'title' => 'HOW TO BEGIN (AND STICK TO!) YOUR FITNESS JOURNEY',
                'content' => '2021 is just a little bit away! I can hardly believe it. This year has felt LONG and I’m super ready for the fresh start.

I always feel this way about the new year, honestly. I love the chance to start totally new! It just feels like the perfect time to break bad habits and start making changes that will improve yourself or your life. I mean, that’s what New Year’s resolutions are all about, right?

What are you resolving to do next year, girl? If you’re thinking about working on your physical health, you are NOT alone. So many of the most popular New Year’s resolutions are about fitness. In fact, exercising more is the most common resolution out there, and losing weight and eating more healthily rank in the top four, too.

If fitness is a priority for you next year, I’ve got great news! We’re launching a 30 Challenge to help you start and stick with your 2021 fitness journey. FINDING WHAT WORKS FOR YOUR FITNESS
The thing about New Year’s resolutions is that people usually don’t keep them for very long. No, seriously. Resolutions are pretty much a recipe for failure. Most people break their resolution by January 12. Yep, you read that right: just 12 days!

But it takes a while to make a habit. 12 days is def not enough!

When I was starting my fitness journey, it was all about sticking with it. It’s really hard at first, but I swear, it gets easier! Every day you stay on track is another day of progress, and the next day it’s a little less hard. Your cravings start to fade and you get in a routine of healthy habits.

I’ve designed the 30 Challenge (and all of our LSF challenges, workouts, etc.) from my own experience. I know what works because I spent years figuring out what doesn’t!

Don’t believe me? I’ve lived this thing, babe. Check out my story to find out how I lost 45 pounds — and have kept it off for years.

It’s really about staying the course. And I can help you do it!

That’s why we’ve got our 30 Challenge lined up for you. This is 30 days of hard-core focus on your fitness goals, and if you pull it off, you’ll get another 30 days of support!',
                'category_id' => $categories->find(6)->id,
                'path_image' => 'assets/images/15.jpg',
            ],
            [
                'title' => '8 SIMPLE YOGA MOVES FOR RELAXATION',
                'content' => 'It’s officially time to get your relaxation on… yoga edition! These 8 simple yoga moves for beginners are sure to relax both you and your muscles… yes please! Roll out that mat, light a candle, and get your stretch on! Whether it’s in the early morning after my coffee, or at the end of the day, these simple yet effective yoga moves for beginners have seriously been my go to’s. Do these yoga moves at home, at the beach, anywhere! All you need is your beautiful self and a yoga mat.

If you like these moves, you’re going to seriously LOVE all of my other yoga videos on the LSF app. I’ve put my all time favorite yoga moves into full videos on the app so you can keep track of your favorite stretches and customize your own routine! Download it here and let me know which moves are your favorite!

And guess what… It’s Self Care September which means we’re officially putting our minds and bodies first this month and what better way to preach self care than to add this simple routine that your body will love you for! If you’re looking to start your own journey with self care (which, who wouldn’t want to!) then you’ll totally love my best tips for self care and everything I’m doing to participate this month!',
                'category_id' => $categories->find(6)->id,
                'path_image' => 'assets/images/16.jpg',
            ],
        ];
        foreach ($posts as $post) {
            Post::create($post);
        }
        $posts = Post::all();
        $comments = [
            [
                'content' => 'Thanks for the lovely post. It was really helpful.',
                'visitor_id' => $visitors->find(1)->id,
                'post_id' => $posts->find(1)->id,
            ],
            [
                'content' => 'You always come in on time, follow your schedule and adhere to your designated lunch break time.',
                'visitor_id' => $visitors->find(2)->id,
                'post_id' => $posts->find(1)->id,
            ],
            [
                'content' => 'Showcased proactiveness in various activities both within and outside the project',
                'visitor_id' => $visitors->find(3)->id,
                'post_id' => $posts->find(2)->id,
            ],
            [
                'content' => 'You are honest and always admit when you don’t have the knowledge about something.',
                'visitor_id' => $visitors->find(1)->id,
                'post_id' => $posts->find(4)->id,
            ],
            [
                'content' => 'Your best quality is that when faced with a problem, you listen first, take into account everything and then try to come up with a solution.',
                'visitor_id' => $visitors->find(2)->id,
                'post_id' => $posts->find(6)->id,
            ],
            [
                'content' => 'You abide by the company’s rules and policies.',
                'visitor_id' => $visitors->find(3)->id,
                'post_id' => $posts->find(7)->id,
            ],
        ];
        foreach ($comments as $comment) {
            Comment::create($comment);
        }
        $postTags = [
            [
                'post_id' => $posts->find(1)->id,
                'tag_id' => $tags->find(11)->id,
            ],
            [
                'post_id' => $posts->find(1)->id,
                'tag_id' => $tags->find(12)->id,
            ],
            [
                'post_id' => $posts->find(1)->id,
                'tag_id' => $tags->find(13)->id,
            ],
            [
                'post_id' => $posts->find(2)->id,
                'tag_id' => $tags->find(13)->id,
            ],
            [
                'post_id' => $posts->find(2)->id,
                'tag_id' => $tags->find(11)->id,
            ],
            [
                'post_id' => $posts->find(3)->id,
                'tag_id' => $tags->find(1)->id,
            ],
            [
                'post_id' => $posts->find(3)->id,
                'tag_id' => $tags->find(2)->id,
            ],
            [
                'post_id' => $posts->find(3)->id,
                'tag_id' => $tags->find(3)->id,
            ],
            [
                'post_id' => $posts->find(4)->id,
                'tag_id' => $tags->find(1)->id,
            ],
            [
                'post_id' => $posts->find(4)->id,
                'tag_id' => $tags->find(2)->id,
            ],
            [
                'post_id' => $posts->find(5)->id,
                'tag_id' => $tags->find(3)->id,
            ],
            [
                'post_id' => $posts->find(5)->id,
                'tag_id' => $tags->find(4)->id,
            ],
            [
                'post_id' => $posts->find(6)->id,
                'tag_id' => $tags->find(10)->id,
            ],
            [
                'post_id' => $posts->find(6)->id,
                'tag_id' => $tags->find(3)->id,
            ],
            [
                'post_id' => $posts->find(6)->id,
                'tag_id' => $tags->find(4)->id,
            ],
            [
                'post_id' => $posts->find(7)->id,
                'tag_id' => $tags->find(10)->id,
            ],
            [
                'post_id' => $posts->find(7)->id,
                'tag_id' => $tags->find(4)->id,
            ],
            [
                'post_id' => $posts->find(8)->id,
                'tag_id' => $tags->find(5)->id,
            ],
            [
                'post_id' => $posts->find(8)->id,
                'tag_id' => $tags->find(10)->id,
            ],
            [
                'post_id' => $posts->find(9)->id,
                'tag_id' => $tags->find(10)->id,
            ],
            [
                'post_id' => $posts->find(10)->id,
                'tag_id' => $tags->find(5)->id,
            ],
            [
                'post_id' => $posts->find(11)->id,
                'tag_id' => $tags->find(5)->id,
            ],
            [
                'post_id' => $posts->find(11)->id,
                'tag_id' => $tags->find(9)->id,
            ],
            [
                'post_id' => $posts->find(12)->id,
                'tag_id' => $tags->find(10)->id,
            ],
            [
                'post_id' => $posts->find(12)->id,
                'tag_id' => $tags->find(14)->id,
            ],
            [
                'post_id' => $posts->find(13)->id,
                'tag_id' => $tags->find(14)->id,
            ],
            [
                'post_id' => $posts->find(14)->id,
                'tag_id' => $tags->find(5)->id,
            ],
            [
                'post_id' => $posts->find(14)->id,
                'tag_id' => $tags->find(6)->id,
            ],
            [
                'post_id' => $posts->find(15)->id,
                'tag_id' => $tags->find(7)->id,
            ],
            [
                'post_id' => $posts->find(15)->id,
                'tag_id' => $tags->find(8)->id,
            ],
            [
                'post_id' => $posts->find(16)->id,
                'tag_id' => $tags->find(8)->id,
            ],
            [
                'post_id' => $posts->find(16)->id,
                'tag_id' => $tags->find(9)->id,
            ],
        ];
        foreach ($postTags as $postTag) {
            PostTag::create($postTag);
        }
    }
}
