function externalLinks() { for(var c = document.getElementsByTagName("a"), a = 0;a < c.length;a++) { var b = c[a]; b.getAttribute("href") && b.hostname !== location.hostname && (b.target = "_blank") } } ; externalLinks();

function modifyLinks() {
   let links = document.getElementsByTagName('a');
   for (i = 0; i < links.length; i++) {
      if (links[i].href.endsWith('.pdf')) {
         links[i].addEventListener('click', function(e) {
            e.preventDefault();
            window.open(this.href, '_blank');
         })
      }
   }
}

window.addEventListener('load', modifyLinks);
