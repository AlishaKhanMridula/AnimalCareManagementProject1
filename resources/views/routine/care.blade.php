<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <div class="navbar">
        <a href="{{ url('/dashboard') }}" :active="request()->routeIs('dashboard')">
            {{ __('Home Page') }}
        </a>
        <a href="{{ url('/care') }}" :active="request()->routeIs('care')">
            {{ __('Animal Health Care Routine') }}
        </a>
        <a href="{{ url('/vet') }}" :active="request()->routeIs('vet')">
            {{ __('Vet Doctors') }}
        </a>
        <a href="{{ url('/make') }}" :active="request()->routeIs('make')">
            {{ __('Donation') }}
        </a>
      </div>

      <h1 class="city">
         <strong>Health Care Routine Of Pets</strong>
      </h1>
  <style>
  .city{
    color: Black;
    font-size: 10vh;
    text-align: center;
    padding: 10px;
  }
  .navbar{
    background: #333;
    overflow: hidden;
    border-style: 2px solid;
    border color: white;
  }
  .navbar a{
    float: left;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px
  }
  .navbar a:hover{
    background-color: #66FF66;
    color: white;
  }
  .navbar a.active{
    background-color: #04AA6D;
    color: white;
  }
  .column1 {
  float: left;
  width: 50%;
  font-size: 3vh;
  padding-right: 50px;
  padding-top: 50px;
}
.column2 {
float: right;
width: 40%;
font-size: 2vh;
padding-top: 50px;

}

.row:after {
  content: "";
  display: table;
  clear: both;
}
body{
  padding-left: 50px;
  padding-right: 50px;
}
.cure{
  font-size: 4vh;
}
.cure1{
  font-size: 3vh;
}

  </style>
</head>
<body>
  <div class="row">
  <div class="column1"><p class="cure"><strong><u>Questions Answers About The Health Of Dogs:</u></strong></p>
    <p><strong>Question #1: Why does dog eat grass?</strong></p>
    <p>Dogs eat grass to satisfy dietary needs or to provide treatment for themselves when feeling sick. Usually, you don’t have to worry about any harm coming to your pet if he eats grass, but as a good pet owner you do want to ask yourself “why” if you see him doing so! Perhaps the diet he is currently on is not providing him the nutrients he needs; so he is looking for those needs to be met with the grass that he eats.</p>
    <p>Also, a dog who feels sick to his stomach may find a quick natural remedy for this by eating grass. However, if your pet starts to suddenly eat grass in large amounts, take him to the vet right away: experts advise this course because such activity can likely mean he has something very wrong with him and is trying to help himself.</p>
    <p><strong>Question #2: Older dog seems to have dementia…Is this possible?</strong></p>
    <p>According to PetMd, 50% of dogs over the age of 11 shows signs of cognitive decline (which some might refer to as dementia). So the answer to your question is a yes: it is possible for an older to dog to suffer from cognitive decline/dementia.</p>
    <p>If your dog has some of the symptoms listed in this article or any of the ones listed below, you may want to mention it to the vet during checkup, so he can test for Cognitive Dysfunction Syndrome.</p>
    <ul>
    <li>Seems lethargic</li>
    <li>Not interested in usual activities</li>
    <li>Change in sleeping patterns</li>
    <li>Seems confused</li>
    </ul>
    <p>CDS is not curable, but the symptoms can be treated. Sometimes, our dogs just get old; and when that happens, it seems their old bodies cannot behave like when they were young. There are some things you can do however to help your pet in this situation. When a diagnosis is given, you as the owner can choose to either purchase medication for your pet to help slow the decline or go with therapy options. Both options, especially if used together, can be of great help to your pet!</p>
   </div>
  <div class="column2">
  <p><image src="https://shallowfordvet.com/wp-content/uploads/2017/01/dog-cat.jpg" width="600" height="341" title="Rescuing animals"></p>
  </br>
  <image src="https://shallowfordvet.com/wp-content/uploads/Giardia-300x200.jpg" width="600" height="341">
  </br>
  </div>
</div>
<div class="cure1">
<p><strong>Question #3: Should I brush my pet’s teeth?</strong></p>
<p>The answer to this question is a resounding yes! It is very important to brush your pet’s teeth on a regular basis, using pet toothbrushes and pet toothpaste of course! You may want to know why teeth cleaning is so important. See the facts below to further understand why your pet needs his pearly whites in mint condition!</p>
<ul>
<li>Signs of teeth and gum diseases begin occurring in 80% of dogs after reaching the age of 3. Cats also face risk of developing dental disease, the most common of these being Periodontal disease.</li>
<li>Because of the facts above, veterinarians recommend yearly professional cleanings, especially as your pet gets older, along with daily brushing by pet owners to combat this.</li>
<li>The serious effects of dental problems can be prevented by proactive, preventative care. Help your pet with his beautiful smile; in doing so you will be promoting overall good health!</li>
</ul>
<p><strong>Question #4: What should we do the day before a surgery for my pet?</strong></p>
<p>This question arises quite often since many pets have to undergo surgery at least once or twice in their life. How can you do the right thing as a pet parent to ensure the best outcome? See the tips below to prepare your pet:</p>
<ul>
<li>Make sure your pets get plenty of rest in the days preceding the surgery. You don’t want them to be over-exercised or lacking in sleep before an intense procedure!</li>
<li>Find out from your vet if it is okay for your pets to take their regular medication in the weeks preceding the surgery.</li>
<li>Usually, adult pets should not eat anything the evening and morning before the surgery, though it is usually okay to let them drink water. Kittens and puppies on the other hand might need a light meal the morning of a surgery as their tiny size makes them weaker and less able to stand for long periods without food.</li> </ul>
<p class="cure"><strong>Health Care Tips:</strong></p>
<ol>
  <li><strong>Veterinarian Visits</strong></li>
  <p>Responsible pet ownership starts with regular visits to the veterinarian. Given their shorter-than-human lifespan, your dog or cat should be getting a checkup at least once or twice a year. Depending on your pet's vaccination schedule, they may go more frequently when they're young, but establishing and maintaining good pet health means keeping up with vet visits as they age.</p>

  <p>Trips to the vet can be, shall we say, challenging. Cats, in particular, may be averse to leaving the comfy confines of their home, but there are ways to reduce stress for both of you. Acclimating your cat to her carrier when she is a kitten is good practice (and avoids the running-away-and-hiding-under-the-bed scenario). Dogs tend to like going for car rides. Take your pup on joyrides, so he won't associate getting into the car with going to the vet. And many pets don't mind a trip to the veterinarian's office, especially if you choose a vet that's a good fit for your little friend.</p>
  <li><strong>Vaccinations</strong></li>
  <p>Vaccinating your pets is a vital component of responsible pet care. Soon after welcoming your new pet into your home, schedule an immunization appointment. During your first visit, the vet will set up an immunization schedule for your little pup or kitten to protect them from illness and disease. Vaccinations for puppies should happen early in your puppies first few weeks after you bring him home. Talk to your vet at your first appointment, on when a good time to schedule that visit. They help prevent diseases such as rabies, Lyme disease, and distemper. Cats benefit from vaccines that prevent feline herpes virus, feline leukemia, and rabies. If you've adopted an adult or senior animal, make sure they are immunized, too. Vaccinations do need renewal and aren't just for young pets.</p>
</ol>
<div>

</body>
</html>
