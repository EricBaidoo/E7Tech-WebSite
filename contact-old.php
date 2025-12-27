<?php include 'header.php'; ?>
<main>
    <section class="container py-5">
        <h2 class="mb-4 text-primary"><i class="fa-solid fa-envelope me-2"></i>Contact Us</h2>
        <div class="row">
            <div class="col-md-6">
                <form class="contact-form" method="post" action="#">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message:</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-paper-plane me-2"></i>Send Message</button>
                </form>
            </div>
            <div class="col-md-6">
                <div class="contact-details bg-light p-4 rounded shadow-sm">
                    <h3 class="text-primary mb-3"><i class="fa-solid fa-location-dot me-2"></i>Our Office</h3>
                    <p>Accra, Ghana<br>Email: info@e7techsolutions.com<br>Phone: +233 XXX XXX XXX</p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include 'footer.php'; ?>