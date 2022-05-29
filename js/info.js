function textswitch(evt, textType) {
    // Declare all variables all from w3schools
    var i, tabcontent, tab_btn;
  
    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
  
    // Get all elements with class="tab_btn" and remove the class "active"
    tab_btn = document.getElementsByClassName("tab_btn");
    for (i = 0; i < tab_btn.length; i++) {
      tab_btn[i].className = tab_btn[i].className.replace(" active", "");
    }
  
    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(textType).style.display = "block";
    evt.currentTarget.className += " active";


  }

      // Auto click on the intro first for default ez fix lol
      document.getElementById("defualt").click();