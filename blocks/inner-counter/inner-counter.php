<div class="level custom-block grid grid-cols-3 gap-3 <?php the_field('background');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="col-span-1 flex justify-center">
        <p class="text-donkergrijs text-30 leading-40 font-poppins font-bold pr-[4px]"></p>
        <p class="js-count-up text-donkergrijs text-30 leading-40 font-poppins font-bold " data-value="329"></p>
        <p class="text-donkergrijs text-30 leading-40 font-poppins font-bold pl-[4px]"></p>
    </div>
    <div class="col-span-1 flex justify-center">
        <p class="text-donkergrijs text-30 leading-40 font-poppins font-bold pr-[4px]"></p>
        <p class="js-count-up text-donkergrijs text-30 leading-40 font-poppins font-bold " data-value="34"></p>
        <p class="text-donkergrijs text-30 leading-407 font-poppins font-bold pl-[4px]">%</p>
    </div>
    <div class="col-span-1 flex justify-center">
        <p class="text-donkergrijs text-30 leading-40 font-poppins font-bold pr-[4px]">€</p>
        <p class="js-count-up-decimal text-donkergrijs text-30 leading-40 font-poppins font-bold" data-value="2.6"></p>
        <p class="text-donkergrijs text-30 leading-40 font-poppins font-bold pl-[4px]"></p>
    </div>
</div>
 
<script type="module">
import { CountUp } from 'https://cdnjs.cloudflare.com/ajax/libs/countup.js/2.0.7/countUp.js'
function countStart(){
  const counters = document.querySelectorAll(".js-count-up"),
        options = {
          useEasing: true,
          useGrouping: false,
          separator: ",",
          decimal: ".",
        };
 
  counters.forEach( (item) => {
    const value = item.dataset.value;
    const counter = new CountUp(item, value, options);
    counter.start();
  });
}
countStart()
 
function countStartDecimal(){
  const counters = document.querySelectorAll(".js-count-up-decimal"),
        options = {
          useEasing: true,
          useGrouping: false,
          separator: ",",
          decimal: ".",
          decimalPlaces: 1,
        };
 
  counters.forEach( (item) => {
    const value = item.dataset.value;
    const counter = new CountUp(item, value, options);
    counter.start();
  });
}
countStartDecimal()
 
try {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        countStart()
        countStartDecimal()
      }
    });
  });
 
  const hiddenElements = document.querySelectorAll(".level");
  hiddenElements.forEach((el) => observer.observe(el));
} catch (error) {}
</script>