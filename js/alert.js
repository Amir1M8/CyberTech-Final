function showCustomConfirm(lang, thing, id) {
    const overlay = document.getElementById('customConfirmOverlay');
    const confirmMessage = document.getElementById('confirmMessage');
    const confirmBtn = document.getElementById('confirmBtn');
    const cancelBtn = document.getElementById('cancelBtn');
  
    if (lang == "en") {
      confirmMessage.textContent = "Are you sure you want to delete this " + thing + "?";
      confirmBtn.textContent = "OK";
      cancelBtn.textContent = "Cancel";
    } else if (lang == "fa") {
      confirmMessage.textContent = "آیا از انجام این کار مطمئن هستید؟";
      confirmBtn.textContent = "تایید";
      cancelBtn.textContent = "لغو";
    }
  
  
  
    overlay.style.display = 'flex';
  
    confirmBtn.onclick = null;
    cancelBtn.onclick = null;
  
    confirmBtn.onclick = function() {
      overlay.style.display = 'none';
      window.location = "../database/delete_data.php?id="+id+"&type="+thing+"&lang="+lang;
    };
  
    cancelBtn.onclick = function() {
      overlay.style.display = 'none';
    };
}
  