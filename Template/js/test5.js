function idleTimer() {
    var t;
    //window.onload = resetTimer;
    window.onmousemove = resetTimer; // catches mouse movements
    window.onmousedown = resetTimer; // catches mouse movements
    window.onclick = resetTimer;     // catches mouse clicks
    window.onscroll = resetTimer;    // catches scrolling
    window.onkeypress = resetTimer;  //catches keyboard actions

    function logout() {
        // alert("Hello! You will be logged out due to inactivity!!");
        window.location.href = 'logout/logout_proc';  //Adapt to actual logout script
    }

   function reload() {
        // alert("Hello! I fam a reload alert box!!");
        window.location = self.location.href;  //Reloads the current page
   }

   function resetTimer() {  
        clearTimeout(t);
        t = setTimeout(logout, 10000);  // time is in milliseconds (1000 is 1 second)
        t= setTimeout(reload, 5000);  // time is in milliseconds (1000 is 1 second)
    }
    console.log("idleTimer");
}
idleTimer();