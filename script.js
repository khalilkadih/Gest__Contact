$(document).ready(function() {

    
    $('.editbtn').on('click', function(e) {
      //  console.log(e.target);
        $('#editmodal').modal('show');

        $tr = $(this).closest('tr');
        // console.log($tr[0]);

        let data = $tr.children("td").map(function() {
            console.log(this);
            return $(this).text();
        }).get();
        
        // console.log(data);
        
        /////////////////////////

        let children=$tr.children();
        let id_contact=children[0].textContent;
         let name=children[1].textContent;
         let email=children[2].textContent;
        let phone=children[3].textContent;
         let adress=children[4].textContent;
        $('#editmodal .id_contact').val(data[0]);
        $('#editmodal .flname').val(data[1]);
        $('#editmodal .email').val(data[2]);
        $('#editmodal .phone').val(data[3]);
        $('#editmodal .adress').val(data[4]);
       
    });





              

});