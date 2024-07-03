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
  </style>
</head>

<body>
 <?php
 echo'
 <header>
 <!-- navbar -->
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
         <li><a href="index.php">Home</a></li>
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
       <li><a href="index.php">Home</a></li>
       <li><a href="doctor.php">Doctors</a></li>
       <li><a href="appointment.php">Appointment</a></li>
       <!-- <li><a>Contact</a></li> -->
     </ul>
   </div>
   <div class="navbar-end">
     <a class="btn uppercase bg-[#00ffff]">Login</a>
   </div>
 </div>

 <!-- Doctors -->
 <div class="mb-20">
   <h1 class="text-center text-4xl poppins-semibold my-10 ">Our Specialties</h1>
   <div class="grid sm:grid-cols-1 lg:grid-cols-3 gap-6">
     <!-- first doctor -->
     <div class="card w-96 bg-base-100 shadow-xl m-auto">
       <figure><img src="../images/Doctors/parves.jpg" class="rounded-full mt-5 w-36" alt="Shoes" /></figure>
       <div class="card-body">
         <h2 class="card-title mb-0">Dr. Parves Zaman</h2>
         <h3 class="poppins-regular">Cardiac surgeon <br> MBBS MS</h3>
         <p class="text-justify">Dr. ONeill is the Medical Director of the Center for Structural Heart Disease at the Henry Ford Health System.
           Founding member of the American Board of Internal Medicine  nterventional cardiology board.</p>
         <div class="card-actions justify-start mt-5">
           <a href="parves.html" target="_blank"><button class="btn btn-outline btn-accent ">Read More</button></a>
         </div>
       </div>
     </div>
     <!-- second doctor -->
     <div class="card w-96 bg-base-100 shadow-xl m-auto">
       <figure><img src="../images/Doctors/tonmoy.jpg" class="rounded-full mt-5 w-36" alt="Shoes" /></figure>
       <div class="card-body">
         <h2 class="card-title mb-0">Dr. Shahriar Tonmoy</h2>
         <h3 class="poppins-regular">Pulmonologist <br>MBBS MRCP FCCP</h3>
         <p class="text-justify">Dr Rudro is presently working as a consultant at Fortis Hospital Anandapur, Kolkata. Dr Rudro Prasad Ghosh has performed more than 4000 Phacoemulsification Surgeries and 8000 plus SICS surgeries.</p>
         <div class="card-actions justify-start mt-5">
           <a href="parves.html" target="_blank"><button class="btn btn-outline btn-accent ">Read More</button></a>
         </div>
       </div>
     </div>
     <!-- third doctor  -->
     <div class="card w-96 bg-base-100 shadow-xl m-auto">
       <figure><img src="../images/Doctors/rayan.jpg" class="rounded-full mt-5 w-36" alt="Shoes" /></figure>
       <div class="card-body">
         <h2 class="card-title mb-0">Dr. Rayan Siam</h2>
         <h3 class="poppins-regular">Rheumatologist  <br>MBBS DA DIP</h3>
         <p class="text-justify">Dr Vivek Garg is presently working as an Associate Consultant in Ophthalmology (Eye Department) of BLK Super Speciality Hospital, New Delhi. He has vast experience of 12 plus years in the </p>
         <div class="card-actions justify-start mt-5">
           <a href="parves.html" target="_blank"><button class="btn btn-outline btn-accent ">Read More</button></a>
         </div>
       </div>
     </div>
     <!-- fourth doctor  -->
     <div class="card w-96 bg-base-100 shadow-xl m-auto">
       <figure><img src="../images/Doctors/mira.jpg" class="rounded-full mt-5 w-36" alt="Shoes" /></figure>
       <div class="card-body">
         <h2 class="card-title mb-0">Dr. Mira</h2>
         <h3 class="poppins-regular">General practitioner <br> MBBS FCPS MRCP</h3>
         <p class="text-justify">Specializes in advanced Heart Surgery procedures. Treats conditions like coronary
           artery disease, valve abnormalities, and aortic aneurysms. International medical experience, ncing skills
           in diverse healthcare settings. Conducts atient-centric consultations for Heart Surgery treatments,
           ensuring safety.</p>
         <div class="card-actions justify-start mt-5">
           <a href="parves.html" target="_blank"><button class="btn btn-outline btn-accent ">Read More</button></a>
         </div>
       </div>
     </div>
     <!-- fifth doctor  -->
     <div class="card w-96 bg-base-100 shadow-xl m-auto">
       <figure><img src="../images/Doctors/rifat.jpg" class="rounded-full mt-5 w-36" alt="Shoes" /></figure>
       <div class="card-body">
         <h2 class="card-title mb-0">Dr. Rifat Hossen</h2>
         <h3 class="poppins-regular">Neurologist <br> MBBS, MS, MCh</h3>
         <p class="text-justify">Dr. Rifat hossen is one of the Best Neurosurgeons in New Delhi with more than two
           decades of vast clinical experience in the field of neuro and spine surgery. Dr. Walia has performed more
           than 7000 spinal surgeries and has a keen interest in advanced technique.</p>
         <div class="card-actions justify-start mt-5">
           <a href="parves.html" target="_blank"><button class="btn btn-outline btn-accent ">Read More</button></a>
         </div>
       </div>
     </div>
     <div class="card w-96 bg-base-100 shadow-xl m-auto">
       <figure><img src="../images/Doctors/suborna.jpg" class="rounded-full mt-5 w-36" alt="Shoes" /></figure>
       <div class="card-body">
         <h2 class="card-title mb-0">Dr. Fariya Islam</h2>
         <h3 class="poppins-regular">Ophthalmologist <br> MBBS, MS</h3>
         <p class="text-justify">Dr. Fariya islam is a renowned Ophthalmologist with over 22 years of experience. She
           has been involved in establishing Ophthalmic Services at Nova Specialty Hospitals,New Delhi, as well as
           Artemis Health Institute MS (Ophthalmology) and FRCS fromEdinburgh, UK.</p>
         <div class="card-actions justify-start mt-5">
           <a href="parves.html" target="_blank"><button class="btn btn-outline btn-accent ">Read More</button></a>
         </div>
       </div>
     </div>
   </div>


 </div>
</header>
 '
 ?>


</body>

</html>