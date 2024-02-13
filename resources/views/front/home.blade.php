<x-frontendlayout>
    <x-slot name="title">
        Home
    </x-slot>
    <x-alert type="success" />
    <!-- landing  -->
  <div class="landingPage">
    <div class="container text-center text-lg-end d-flex  flex-row-reverse align-items-center">
     <img src="{{ asset("image/thinking.png") }}" alt="logo" class="d-none d-lg-block animate__animated animate__backInLeft">
     <div class="landingContent animate__animated animate__backInRight">
         <h2>تحكم و طور من حياتك من خلال التمارين و الالعاب المخصصة لك</h2>
         <p>قم باجراء الاختبار لتحدد حالتك و الحصول علي التمارين المناسبة لك</p>
         <div class="btn">ابدأ الان</div>
     </div>
    </div>
  </div>
  <!-- section2  -->
  <div class="section2 py-5">
     <div class="container d-flex justify-content-between align-items-center p-3 gap-5">
         <div class="content  text-center  text-lg-end animate__animated animate__backInRight">
             <p class="fs-lg-2">لتحسين و متابعه حالتك لحظه بلحظه حمل التطبيق الان لتتمتع بجميع المميزات</p>
             <div class="btn">حمل الان</div>
         </div>
         <img src="{{ asset("image/mobile.png") }}" alt="" class="d-none d-lg-block animate__animated animate__backInLeft">
     </div>
  </div>
  <!-- sec3  -->
  <div class="sec3 py-5">
     <div class="container d-flex flex-column-reverse flex-lg-row-reverse align-items-center justify-content-around justify-content-lg-between text-center text-lg-end">
         <img src="{{ asset("image/traning.png") }}" alt="" class="animate__animated animate__backInLeft">
         <div class="content animate__animated animate__backInRigt">
         نقدم مجموعه من التمارين والالعاب المصممه خصيصا لتحسين حالتك العاطفيه والعقليه
         </div>
     </div>
  </div>
  <!-- sec4  -->
  <div class="sec4 py-5">
     <div class="container d-flex flex-column flex-lg-row align-items-center justify-content-between gap-5 text-center text-lg-end">
         <img src="{{ asset("image/animatLogo.png") }}" alt="" class="animate__animated animate__backInRight">
         <div class="content animate__animated animate__backInLeft">
             <p>استمتع بالالعاب التي  تساعدك علي التركيز والتحكم في المشاعر الان</p>
             <div class="btn">ابدأ الان</div>
         </div>
     </div>
  </div>
</x-frontendlayout>
