window.johnkegd.com.customizator = window.johnkegd.com.customizator || {};
(function (context) {
  
  context.initCustomizations = function () {
    const mobileMenuContainer = document.querySelector(".site-offcanvas");
    const overlay = document.querySelector(".site-overlay");
    const close = document.querySelector(".site-offcanvas-close");

    document.addEventListener("click", function (ev) {
      mobileMenuAutoCloseHandler.bind(ev.target, overlay, close);
    });
  };

  function mobileMenuAutoCloseHandler(overlayContainer, closeBtn) {
    var mobileMenuIsOpen = overlayContainer && overlayContainer.style.visibility === "inherit";
    if (mobileMenuIsOpen) {
      if(this.closest(".site-offcanvas") === null) {
        closeBtn.click();
      }
    }
  }
})(window.johnkegd.com.customizator);
