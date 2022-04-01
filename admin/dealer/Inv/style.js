$('#printInvoice').click(function(){
    Popup($('.invoice')[0].outerHTML);
    function Popup(data) 
    {
        window.print();
        return true;
    }
});

function generatePDF() {
    var doc = new jsPDF();
     doc.fromHTML(document.getElementById("invoice"), // page element which you want to print as PDF
      
     {
       'width': 170
     },
     function(a) 
      {
       doc.save("dealer_order.pdf");
     });
   }
		

		