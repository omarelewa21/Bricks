  var state_b1 = 0;
  var state_b2 = 0;
  var state_b3 = 0;

  function click_1() {

      if (state_b1 == 0) {

          document.getElementById("tex").innerHTML = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempus scelerisque nulla eget lacinia. Cras vel mi quis dolor eleifend molestie. Phasellus commodo purus augue, eget porttitor magna interdum eu. Vestibulum et sem sed nisl porta hendrerit. Praesent gravida venenatis ligula, vitae rutrum orci volutpat ut. Nulla facilisi. Nam egestas urna vitae arcu ornare, eu consequat velit mattis.";

          document.getElementById("lrn-bt-1").textContent = "Less";
          state_b1 = 1;


      } else {
          document.getElementById("lrn-bt-1").textContent = "More";
          document.getElementById("tex").innerHTML = "Lorem ipsum dolor sit amet, consectetur adipiscing elit...";
          state_b1 = 0;

      }



  }
  function click_2() {

      if (state_b2 == 0) {

          document.getElementById("tex2").innerHTML = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempus scelerisque nulla eget lacinia. Cras vel mi quis dolor eleifend molestie. Phasellus commodo purus augue, eget porttitor magna interdum eu. Vestibulum et sem sed nisl porta hendrerit. Praesent gravida venenatis ligula, vitae rutrum orci volutpat ut. Nulla facilisi. Nam egestas urna vitae arcu ornare, eu consequat velit mattis.";
          document.getElementById("lrn-bt-2").textContent = "Less";
          state_b2 = 1;
      } else {
          document.getElementById("lrn-bt-2").textContent = "More";
          document.getElementById("tex2").innerHTML = "Lorem ipsum dolor sit amet, consectetur adipiscing elit...";
          state_b2 = 0;
      }

  }

  function click_3() {
      if (state_b3 == 0) {

          document.getElementById("tex3").innerHTML = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempus scelerisque nulla eget lacinia. Cras vel mi quis dolor eleifend molestie. Phasellus commodo purus augue, eget porttitor magna interdum eu. Vestibulum et sem sed nisl porta hendrerit. Praesent gravida venenatis ligula, vitae rutrum orci volutpat ut. Nulla facilisi. Nam egestas urna vitae arcu ornare, eu consequat velit mattis.";
          document.getElementById("lrn-bt-3").textContent = "Less";
          state_b3 = 1;
      } else {
          document.getElementById("lrn-bt-3").textContent = "More";
          document.getElementById("tex3").innerHTML = "Lorem ipsum dolor sit amet, consectetur adipiscing elit...";
          state_b3 = 0;
      }
  }


  function openNav() {
      document.getElementById("myNav").style.width = "100%";
  }

  function openSearch() {
      document.getElementById("search-nav").style.width = "100%";
  }

  function closeNav() {
      document.getElementById("myNav").style.width = "0%";
      document.getElementById("search-nav").style.width = "0%";
  }
