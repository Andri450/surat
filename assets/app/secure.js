function secure(){

    document.onkeydown = function(e) {
    
        if(event.keyCode == 123) {
            return false;
        }
        if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
            alert("This Website Inspectn't");
            return false;
        }
        if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
            return false;
        }
        if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
            return false;
        }
        if(e.ctrlKey && e.keyCode == 'S'.charCodeAt(0)){
            return false;
        }
        if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)){
            return false;
        }
        
    }
    
    // document.oncontextmenu = function() {return false;};
      
    // $(document).mousedown(function(e){ 
    //     if( e.button == 2 ) {  
    //         return false; 
    //     }  
    // });

    // document.onmousedown = disableclick;
    // function disableclick(event){
    //     if( event.button == 2 ) {  
             
    //     }else if( event.button == 1 ){
    //         alert();
    //     }
    // };

}
secure();