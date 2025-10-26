<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <title>تقييمات الزبائن</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <style>
    body {
      direction: rtl;
      text-align: right;
    }
    .star {
      font-size: 1.8rem;
      cursor: pointer;
      color: gray;
      transition: color 0.2s;
    }
    .star.selected {
      color: gold;
    }
  </style>
</head>
<body class="bg-light py-5">

<div class="container">
  <h2 class="text-center mb-4">تقييمات الزبائن</h2>

  <div class="text-center mb-3">
    <h4>متوسط التقييم: ⭐ 4.5</h4>
  </div>

  <div class="alert alert-success d-none" id="successMessage">تم إرسال تقييمك بنجاح!</div>

  <form id="reviewForm" class="mb-5">
    <div class="mb-3">
      <label class="form-label">الاسم</label>
      <input type="text" id="name" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">التقييم</label><br>
      <div id="stars">
        <span class="star" data-value="1">★</span>
        <span class="star" data-value="2">★</span>
        <span class="star" data-value="3">★</span>
        <span class="star" data-value="4">★</span>
        <span class="star" data-value="5">★</span>
      </div>
      <input type="hidden" id="rating" required>
    </div>

    <div class="mb-3">
      <label class="form-label">التعليق</label>
      <textarea id="comment" class="form-control" required></textarea>
    </div>
    <label class="form-label">التعليق</label>
      <input type="number" id="rating" class="form-control" min="1" max="5" required>
    </div>

    <button type="submit" class="btn btn-primary">إرسال التقييم</button>
  </form>

  <div>
    <h4>جميع التقييمات:</h4>
    <div id="reviewsList"></div>
  </div>
</div>

<script>
let selectedRating = 0;

document.querySelectorAll('.star').forEach(star => {
  star.addEventListener('click', function() {
    selectedRating = this.dataset.value;
    document.querySelectorAll('.star').forEach(s => s.classList.remove('selected'));
    for (let i = 0; i < selectedRating; i++) {
      document.querySelectorAll('.star')[i].classList.add('selected');
    }
    document.getElementById('rating').value = selectedRating;
  });
});

document.getElementById('reviewForm').addEventListener('submit', function(e) {
  e.preventDefault();

  const name = document.getElementById('name').value;
  const rating = document.getElementById('rating').value;
  const comment = document.getElementById('comment').value;

  if (!rating) {
    alert('الرجاء اختيار عدد النجوم');
    return;
  }

  const newReview = document.createElement('div');
  newReview.className = 'border rounded p-3 mb-3 bg-white shadow-sm';
  newReview.innerHTML = `
    <h5>${name} - ${'⭐'.repeat(rating)}</h5>
    <p>${comment}</p>
    <small class="text-muted">${new Date().toLocaleString()}</small>
  `;

  document.getElementById('reviewsList').prepend(newReview);

  document.getElementById('successMessage').classList.remove('d-none');
  setTimeout(() => document.getElementById('successMessage').classList.add('d-none'), 2000);

  this.reset();
  document.querySelectorAll('.star').forEach(s => s.classList.remove('selected'));
  selectedRating = 0;
});
</script>

</body>
</html>
