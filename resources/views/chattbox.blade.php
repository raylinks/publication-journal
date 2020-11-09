<button class="open-button" onclick="openForm()"><i class="fas fa-envelope"></i> Send Us a Message</button>

<div class="chat-popup" id="myForm">
  <form action="" class="form-container">
    <h5 class="text-prima mb-3 font-weight-bold">Drop a Message</h5>

    <input type="email" class="form-control mb-3" placeholder="Email" required>
    <input type="text" class="form-control mb-3" placeholder="Name" required>
    <textarea name="" id="" cols="30" rows="5" class="form-control mb-3" placeholder="Message" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>