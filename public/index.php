<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../src/output.css">
  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    .poppins-regular {
      font-family: "Poppins", sans-serif;
      font-weight: 400;
      font-style: normal;
    }

    .poppins-medium {
      font-family: "Poppins", sans-serif;
      font-weight: 500;
      font-style: normal;
    }

    .poppins-semibold {
      font-family: "Poppins", sans-serif;
      font-weight: 600;
      font-style: normal;
    }

    .poppins-bold {
      font-family: "Poppins", sans-serif;
      font-weight: 700;
      font-style: normal;

    }
    .ami:hover{
      background-color: aliceblue;
      padding: 10px;
      
    }
  </style>

</head>

<body class="poppins-regular">
  <?php
  echo'
  <header>
  <div>
    <div class="navbar bg-base-100 	">
      <div class="navbar-start">
        <div class="dropdown">
          <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
            </svg>
          </div>
          <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
            <li><a>Home</a></li>
            <li><a href="doctor.php">Doctors</a></li>
            <li><a href="appointment.php">Appointment</a></li>
            <!-- <li><a>Contact</a></li> -->
          </ul>
        </div>
        <img class="h-10" src="../images/hospital_13298133.png" alt="">
        <a class="btn btn-ghost text-xl">daisyUI</a>
      </div>
      <div class="navbar-center hidden lg:flex">
        <ul class="menu text-base menu-horizontal px-1 ">
          <li><a>Home</a></li>
          <li><a href="doctor.php">Doctors</a></li>
          <li><a href="appointment.php">Appointment</a></li>
          <!-- <li><a>Contact</a></li> -->
        </ul>
      </div>
      <div class="navbar-end">
        <a class="btn uppercase bg-[#00ffff]">Login</a>
      </div>
    </div>

    <!-- slider -->
    <div class="carousel w-full lg:h-[550px] bg-[#E0FFFF]">
      <!-- slide 1 -->
      <div id="slide1" class="carousel-item relative w-full">
        <div class="flex flex-col lg:flex-row gap-20 p-4 lg:p-24 items-center">
          <div class="space-y-7 flex-1 ">
            <h2 class="text-2xl lg:text-5xl font-bold">How do you train to become a doctor?</h2>
            <p>Once you get into Medical School, you’ll study for between four and six years. After graduation, you
              then
              apply to foundation posts and complete the foundation programme, working under a mentor’s supervision.
              At
              this point, you’ll choose whether to become a medical Doctor, become a surgical trainee, or train to be
              a
              GP.</p>
            <button class="btn glass hover:bg-sky-700"><a
                href="https://www.themedicportal.com/application-guide/deciding-on-medicine/what-does-a-doctor-do/"
                target="_blank">Read More</a></button>
          </div>
          <div class="flex-1">
            <img src="../images/slider1.png" class=" w-[500px] rounded-[12px] mx-auto" />
          </div>
        </div>
        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
          <a href="#slide4" class="btn btn-circle">❮</a>
          <a href="#slide2" class="btn btn-circle">❯</a>
        </div>
      </div>
      <!-- slide 2 -->
      <div id="slide2" class="carousel-item relative w-full">
        <div class="flex flex-col lg:flex-row gap-20 p-4 lg:p-24 items-center">
          <div class="space-y-7 flex-1">
            <h2 class="text-2xl lg:text-5xl font-bold">
              Recognising the responsibilities of nurses</h2>
            <p>This statement provides a description of the role,
              knowledge and skills employed by registered nurses
              who work in the adult social care sector in England. It
              represents the common characteristics across different
              service settings and reflects the passion of those who
              work in this field.</p>
            <button class="btn glass hover:bg-sky-700"><a
                href="https://www.skillsforcare.org.uk/resources/documents/Regulated-professions/Nursing/Recognising-the-responsibilities-and-contribution-of-registered-nurses-within-social-care.pdf"
                target="_blank">Read More</a></button>
          </div>
          <div class="flex-1">
            <img src="../images/slider2.png" class="w-[500px] rounded-[12px] mx-auto" />
          </div>
        </div>
        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
          <a href="#slide1" class="btn btn-circle">❮</a>
          <a href="#slide3" class="btn btn-circle">❯</a>
        </div>
      </div>
      <!-- slider 3 -->
      <div id="slide3" class="carousel-item relative w-full">
        <div class="flex flex-col lg:flex-row gap-20 p-4 lg:p-24 items-center">
          <div class="space-y-7 flex-1">
            <h2 class="text-2xl lg:text-5xl font-bold">
              Ventricular Septal Defect Surgery </h2>
            <p>Some ventricular septal defects (VSDs) are diagnosed soon after a child is born. However, ventricular
              septal defects (VSDs) may not be diagnosed until later in life. Sometimes a ventricular septal defect
              (VSD) can be detected by a pregnancy ultrasound before the baby is born.</p>
            <button class="btn glass hover:bg-sky-700"><a
                href="https://www.mayoclinic.org/diseases-conditions/ventricular-septal-defect/diagnosis-treatment/drc-20353501"
                target="_blank">Read More</a></button>
          </div>
          <div class="flex-1">
            <img src="../images/slider3.png" class="w-[500px] rounded-[12px] mx-auto" />
          </div>
        </div>
        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
          <a href="#slide2" class="btn btn-circle">❮</a>
          <a href="#slide4" class="btn btn-circle">❯</a>
        </div>
      </div>
      <!-- slider 4 -->
      <div id="slide4" class="carousel-item relative w-full">
        <div class="flex flex-col lg:flex-row gap-20 p-4 lg:p-24 items-center">
          <div class="space-y-7 flex-1">
            <h2 class="text-2xl lg:text-5xl font-bold">Welcome with the deep warmth of heart</h2>
            <p>Abdominal operations are performed during ca. 2% of all pregnancies. They represent an unusual
              situation
              not only for the patient, but also for the involved surgeons and anesthesiologists. Appendectomy,
              followed
              by cholecystectomy are the two most common types of operation performed during pregnancy. Special
              questions arise with regard to the peri- and intraoperative management and the optimal surgical approach
            </p>
            <button class="btn glass hover:bg-sky-700"><a
                href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4187409/#:~:text=Appendectomy%2C%20followed%20by%20cholecystectomy%20are,of%20operation%20performed%20during%20pregnancy."
                target="_blank">Read More</a></button>
          </div>
          <div class="flex-1">
            <img src="../images/slider4.png" class="w-[500px] rounded-[12px] mx-auto" />
          </div>
        </div>
        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
          <a href="#slide3" class="btn btn-circle">❮</a>
          <a href="#slide1" class="btn btn-circle">❯</a>
        </div>
      </div>
    </div>
  </div>

</header>
<main class="md:container md:mx-auto">
  <!-- hero section -->
  <section class="my-24">
    <h3 class="text-center lg:text-4xl mb-6 font-bold">Why you choose mayo clinic</h3>
    <div class="hero  bg-base-200">
      <div class="hero-content flex-col  lg:gap-28 lg:flex-row">
        <img src="../images/why-you-choose-us.jpg" class="w-3/4 lg:max-w-sm rounded-lg shadow-2xl" />
        <div class="mr-28">
          <h1 class="text-4xl font-bold my-4">Healing starts here</h1>
          <h3 class="text-1xl font-semibold">The right answers the first time</h3>
          <p>Effective treatment depends on getting the right diagnosis. Our experts diagnose and treat the toughest
            medical challenges.</p>
          <br>
          <h3 class="text-1xl font-semibold">Top-ranked in the U.S.</h3>
          <p>Mayo Clinic has more No. 1 rankings than any other hospital in the nation according to U.S. News & World
            Report. Learn more about our top-ranked specialties.</p>
          <button class="btn btn-outline btn-accent mt-5"><a
              href="https://www.mayoclinic.org/patient-centered-care">Why choose mayo clinic</a></button>
        </div>
      </div>
    </div>
  </section>

  <!-- out recent posts -->
  <section class="my-24">
    <h3 class="lg:text-4xl font-bold text-center mb-8">Our recent posts</h3>
    <div class="grid gap-5 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
      <!-- first card  -->
      <div class="card card-compact  bg-base-100 shadow-xl">
        <figure><img src="../images/post1.jpg" alt="Shoes" /></figure>
        <div class="card-body">
          <h2 class="card-title text-2xl">Leading The Fight Against Heart Disease And Stroke</h2>
          <p>High blood pressure is a leading cause of heart disease and stroke because it damages the lining of the
            arteries, making them more susceptible to the buildup of plaque, which narrows the arteries leading to the
            heart and brain.</p>
          <div class="card-actions justify-start">
            <button class="btn btn-outline btn-accent">More</button>
          </div>
        </div>
      </div>
      <!-- second card -->
      <div class="card card-compact bg-base-100 shadow-xl">
        <figure><img src="../images/post2.jpg" alt="Shoes" /></figure>
        <div class="card-body">
          <h2 class="card-title text-2xl">Let’s Help You Achieve Optimal Wellness</h2>
          <p>A healthy lifestyle can help you thrive as you move through your lifes journey. Making healthy choices
            isnt always easy – it can be hard to find the time and energy to exercise regularly or prepare healthy
            meals. However, your efforts will pay off in many ways, and for the rest of your life.</p>
          <div class="card-actions justify-start">
            <button class="btn btn-outline btn-accent"><a
                href="https://www.ucsfhealth.org/education/healthy-lifestyles-healthy-outlook"
                target="_blank">More</a></button>
          </div>
        </div>
      </div>
      <!-- third card  -->
      <div class="card card-compact bg-base-100 shadow-xl">
        <figure><img src="../images/post3.jpg" alt="Shoes" /></figure>
        <div class="card-body">
          <h2 class="card-title text-2xl">Natural Health and Nutrition</h2>
          <p>When it comes to knowing what’s healthy, even qualified experts often seem to hold opposing opinions.
            This can make it difficult to figure out what you should actually be doing to optimize your health.</p>
          <div class="card-actions justify-start">
            <button class="btn btn-outline btn-accent">More</button>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- happy client say -->
  <section class="my-24">
    <h3 class="text-4xl font-bold text-center mb-8">Happy <span class="text-bike-primary">Clients Say</span></h3>
    <div class="grid gap-5 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
      <!-- first review -->
      <div class="card  bg-base-100 border border-gray-400">
        <figure><img class="w-36 mt-5 rounded-full" src="../images/hc4.png" alt="Shoes" /></figure>
        <div class="card-body">
          <p>I cannot thank the hospital staff enough for their outstanding care and support during my recent surgery.
            From the pre-operative preparations to the post-operative recovery, the team provided personalized
            attention and made me feel like I was their top priority. The facilities were modern and well-equipped,
            and the entire staff was friendly and accommodating. I am truly grateful for the exceptional service I
            received and would wholeheartedly recommend this hospital to others.</p>
          <div class="rating justify-center">
            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" checked />
            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
          </div>
          <div class="text-center space-y-4 mt-4">
            <p>Kim Yoo-jung</p>
          </div>
        </div>
      </div>
      <!-- second review -->
      <div class="card  bg-base-100 border border-gray-400">
        <figure><img class="w-36 mt-5 rounded-full" src="../images/hc5.png" alt="Shoes" /></figure>
        <div class="card-body">
          <p>My experience at the hospital exceeded all expectations. The staff went above and beyond to ensure my
            comfort and well-being during my stay. They were not only professional but also genuinely caring. The
            nurses were incredibly attentive, and the doctors were knowledgeable and approachable. I felt like I was
            in good hands every step of the way. I highly recommend this hospital to anyone in need of medical care.
          </p>
          <div class="rating justify-center">
            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" checked />
            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
          </div>
          <div class="text-center space-y-4 mt-4">
            <p>Song Kang</p>
          </div>
        </div>
      </div>
      <!-- third review -->
      <div class="card  bg-base-100 border border-gray-400">
        <figure><img class="w-36 mt-5 rounded-full" src="../images/hc6.png" alt="Shoes" /></figure>
        <div class="card-body">
          <p>I cant express enough gratitude for the exceptional care my family received at the hospital. From the
            moment we walked in, the staff were attentive, compassionate, and highly skilled. The doctors provided
            thorough explanations and involved us in every decision. The facilities were immaculate, and the
            atmosphere was calming. Thank you for making a difficult time easier.</p>
          <div class="rating justify-center">
            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" checked />
          </div>
          <div class="text-center space-y-4 mt-4">
            <p>Jo Hye-joo</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="my-24">
    <h3 class="text-4xl mb-8 font-bold text-center">Frequently Asked <span class="text-bike-primary">Questions</span>
    </h3>
    <div class="w-full mb-10">
      <div class="w-4/5 mx-auto">
        <div class="join join-vertical w-full">
          <div class="collapse collapse-arrow join-item border border-base-300">
            <input type="radio" name="my-accordion-4" checked="checked" />
            <div class="collapse-title text-xl font-medium">
              How do I make an Appointment?
            </div>
            <div class="collapse-content">
              <p>To make appointment for Consultation with our Consultants who sit in our Out-patient Departments,
                please call our hotline 10666 from any phone anywhere in the country or you can call in our
                Appointment Desk landline 02 22 22 62 466 you can call in these numbers to make appointment for any
                investigations or procedures as well.</p>
            </div>
          </div>
          <div class="collapse collapse-arrow join-item border border-base-300">
            <input type="radio" name="my-accordion-4" />
            <div class="collapse-title text-xl font-medium">
              Do you have Consultants available in United Hospital for 24 hours?
            </div>
            <div class="collapse-content">
              <p>In out-patient department, to provide Consultation services, our Consultants are available from 7am
                till 9pm on weekdays (Saturday to Thursday); of course the time varies from Consultant to Consultant;
                in Friday as well we have few Consultants sitting their OPD. To know details as per your choice of
                Consultant, please call in our hotline number 10666 from any phone anywhere in the country or you can
                call in our Appointment Desk landline 02 22 22 62 466</p>
            </div>
          </div>
          <div class="collapse collapse-arrow join-item border border-base-300">
            <input type="radio" name="my-accordion-4" />
            <div class="collapse-title text-xl font-medium">
              Does the hospital offer any spiritual services?
            </div>
            <div class="collapse-content">
              <p>For the Male Muslims the prayer room is located at the ground floor in the hospital lobby just
                besides Blood Bank and for the Female at 1st floor beside the Ultrasonography wing.</p>
            </div>
          </div>
          <div class="collapse collapse-arrow join-item border border-base-300">
            <input type="radio" name="my-accordion-4" />
            <div class="collapse-title text-xl font-medium">
              Where can I send my feedback or complaint?
            </div>
            <div class="collapse-content">
              <p>A feedback/comment form is given to patients and their attendants in out-patient and in-patient area,
                where you can write down your feedback or recommendation. These are kept in a sealed box to be
                addressed by concerned authorities. Further to submit your feedback and complaints you can click the
                link below http://uhlbd.com/services/enquiry-feedback</p>
            </div>
          </div>
          <div class="collapse collapse-arrow join-item border border-base-300">
            <input type="radio" name="my-accordion-4" />
            <div class="collapse-title text-xl font-medium">
              Does the hospital provide health information brochures/leaflets?
            </div>
            <div class="collapse-content">
              <p>Yes, for awareness and better understanding about hospital facilities, disease and treatment options,
                United Hospital provides brochures, leaflets, cards in Bangla and English and also displays festoon
                and banners.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- our gallery -->
  
  <section>
    <h1 class="text-4xl font-bold text-center mb-8 text-bike-primary">Our Gallery</h1>
    <div class="w-full max-w-5xl mx-auto p-5 mb-10 md:columns-1 pb-10   gap-5 lg:columns-3 space-y-5">
      <video class="" autoplay loop src="../images/gallery/galleryv1.mp4" type="video">hello</video>
      <img src="../images/gallery/gallery10.jpg" class="" alt=""> 
      <img src="../images/gallery/gallary12.jpg" alt="">
      <img src="../images/gallery/gallery1 (2).jpg" alt="">
      <!-- <img src="../images/gallery/gallery1 (7).jpg" alt=""> -->
      <img src="../images/gallery/galleryv2.jpg">
      <img src="../images/gallery/gallery11.jpg" alt="">
      <img src="../images/gallery/gallery13.jpg" alt="">
      <img src="../images/gallery/galleryv3.jpg">
    </div>
    
  </section>

    
    <!-- <div class="grid grid-cols-3 gap-3  grid-flow-dense"> -->
      <!-- <div class="bg-red-500 rounded-lg shadow-xl h-[150px]"> -->
        <!-- <video src="../images/gallery/galleryv1.mp4" class="" autoplay loop></video> -->
      <!-- </div> -->
      <!-- <div class="bg-green-500 rounded-lg shadow-xl h-[150px] "> -->
        <!-- <img src="../images/gallery/gallery1 (6).jpg" class=""> -->
      <!-- </div> -->
      <!-- <div class="bg-yellow-500 rounded-lg shadow-xl h-[150px] col-span-4"> -->
        <!-- <img src="../images/gallery/gallary12.jpg" class="" alt=""> -->
      <!-- </div> -->
      <!-- <div class="bg-purple-500 rounded-lg shadow-xl h-[150px]"> -->
        <!-- <img src="../images/gallery/gallery10.jpg" class="" alt=""> -->
      <!-- </div> -->
      <!-- <div class="bg-orange-500 rounded-lg shadow-xl "> -->
        <!-- <img src="" alt=""> -->
      <!-- </div> -->
      <!-- <div class="bg-lime-500 rounded-lg shadow-xl ">
        <video src=""></video>
      </div>
      <div class="bg-gray-500 rounded-lg shadow-xl ">
        <img src="" alt="">
      </div> -->
    <!-- </div> -->
    
    
    

  </main>

<!-- footer section -->
<footer class="footer p-10 bg-base-200 text-base-content">
  <nav>
    <h6 class="footer-title">Services</h6>
    <a class="link link-hover">Branding</a>
    <a class="link link-hover">Design</a>
    <a class="link link-hover">Marketing</a>
    <a class="link link-hover">Advertisement</a>
  </nav>
  <nav>
    <h6 class="footer-title">Company</h6>
    <a class="link link-hover">About us</a>
    <a class="link link-hover">Contact</a>
    <a class="link link-hover">Jobs</a>
    <a class="link link-hover">Press kit</a>
  </nav>
  <nav>
    <h6 class="footer-title">Legal</h6>
    <a class="link link-hover">Terms of use</a>
    <a class="link link-hover">Privacy policy</a>
    <a class="link link-hover">Cookie policy</a>
  </nav>
  <form>
    <h6 class="footer-title">Newsletter</h6>
    <fieldset class="form-control w-80">
      <label class="label">
        <span class="label-text">Enter your email address</span>
      </label>
      <div class="join">
        <input type="text" placeholder="username@site.com" class="input input-bordered join-item" />
        <button class="btn btn-primary join-item">Subscribe</button>
      </div>
    </fieldset>
  </form>
</footer>
  '
  ?>
</body>

</html>