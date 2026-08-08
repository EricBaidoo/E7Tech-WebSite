<?php
$page_title = "Luke7 - Church Financial Platform | E7 Technology";
$meta_description = "Luke7 is E7's dedicated church financial management and stewardship platform. Coming soon.";
include('../header.php');
?>

<!-- COMING SOON PAGE -->
<section class="min-h-screen bg-white flex items-center justify-center relative overflow-hidden pt-24 pb-20">
    <div class="absolute top-[-10%] left-1/2 -translate-x-1/2 w-[60rem] h-[30rem] bg-emerald-500/8 rounded-full blur-[100px] pointer-events-none"></div>
    <div class="absolute bottom-[-15%] left-[-5%] w-[40rem] h-[40rem] bg-teal-500/8 rounded-full blur-[100px] pointer-events-none"></div>

    <div class="max-w-2xl mx-auto px-4 text-center relative z-10">
        <div class="w-20 h-20 rounded-3xl bg-emerald-50 border border-emerald-100 flex items-center justify-center mx-auto mb-8 text-emerald-600 text-4xl shadow-sm">
            <i class="fas fa-church"></i>
        </div>

        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-100 text-slate-500 text-[10px] font-bold uppercase tracking-[0.2em] mb-8 border border-slate-200">
            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
            Coming Soon — FaithOS Ecosystem
        </div>

        <h1 class="text-5xl md:text-6xl font-black text-slate-900 tracking-tighter mb-6 leading-[1.1]">
            Luke7™
        </h1>
        <p class="text-xl text-slate-500 font-light leading-relaxed mb-4 tracking-tight">
            A dedicated church financial stewardship and giving platform. Track tithes, offerings, and pledges digitally. Give your congregation a seamless digital giving experience.
        </p>
        <p class="text-base text-slate-400 mb-12 font-medium">Built for modern ministries across Africa. Be first to know when we launch.</p>

        <form class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto mb-10" onsubmit="handleSubmit(event)">
            <input type="email" required placeholder="pastor@yourchurch.org"
                class="flex-grow px-5 py-4 rounded-xl border border-slate-200 bg-slate-50 text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-sm font-medium tracking-tight">
            <button type="submit"
                class="px-6 py-4 bg-slate-900 text-white font-bold rounded-xl hover:bg-emerald-600 transition-all shadow-lg text-sm tracking-tight whitespace-nowrap">
                Notify My Church
            </button>
        </form>
        <div id="success-msg" class="hidden text-emerald-600 font-semibold text-sm mb-6">✅ You're on the list! We'll be in touch.</div>

        <a href="../products" class="inline-flex items-center gap-2 text-slate-400 hover:text-slate-700 font-medium text-sm transition-colors">
            <i class="fas fa-arrow-left text-xs"></i> Back to All Products
        </a>
    </div>
</section>

<script>
function handleSubmit(e) {
    e.preventDefault();
    document.getElementById('success-msg').classList.remove('hidden');
    e.target.reset();
}
</script>

<?php include('../footer.php'); ?>
