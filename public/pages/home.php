<?= Layouts::PageHeader(Init::$title) ?>
  <div class="container mx-auto p-4 grid gap-4 grid-cols-4">
    <div class="h-16 w-40 rounded-xl flex justify-center items-center bg-success text-white">Success</div>
    <div class="h-16 w-40 rounded-xl flex justify-center items-center bg-danger text-white">Danger</div>
    <div class="h-16 w-40 rounded-xl flex justify-center items-center bg-warning text-white">Warning</div>
    <div class="h-16 w-40 rounded-xl flex justify-center items-center bg-info text-white">Info</div>
  </div>

  <div class="container mx-auto p-4 grid gap-4 grid-cols-2 grid-rows-2">
    <div class="container mx-auto p-4 bg-light rounded-xl border">
      <div class="font-bold text-3xl text-primary">Primary Color, Light Background</div>
      <div class="text-accent underline">Accent:  For links and Buttons</div>
      <div class="text-dark font-extrabold text-lg">Just Dark Text</div>
      <div class="text-black font-extrabold text-lg">Black Text</div>
    </div>
  
    <div class="container mx-auto p-4 bg-white rounded-xl border">
      <div class="font-bold text-3xl text-primary">Primary Color, White Background</div>
      <div class="text-accent underline">Accent:  For links and Buttons</div>
      <div class="text-dark font-extrabold text-lg">Just Dark Text</div>
      <div class="text-black font-extrabold text-lg">Black Text</div>
    </div>
  
    <div class="container mx-auto p-4 bg-dark rounded-xl border">
      <div class="font-bold text-3xl text-primary">Primary Color, Dark Background</div>
      <div class="text-accent underline">Accent:  For links and Buttons</div>
      <div class="text-light font-extrabold text-lg">Just Light Text</div>
      <div class="text-white font-extrabold text-lg">White Text</div>
    </div>
    
    <div class="container mx-auto p-4 bg-black rounded-xl border">
      <div class="font-bold text-3xl text-primary">Primary Color, Black Background</div>
      <div class="text-accent underline">Accent:  For links and Buttons</div>
      <div class="text-light font-extrabold text-lg">Just Light Text</div>
      <div class="text-white font-extrabold text-lg">White Text</div>
    </div>
  </div>
<?= Layouts::PageFooter() ?>