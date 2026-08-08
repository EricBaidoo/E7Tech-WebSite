<?php
$page_title = "ZeroTrust Access - Network Security | E7 Technology";
$meta_description = "ZeroTrust Access by E7Shield is an enterprise network security product. Coming soon from E7 Technology Solutions.";
include('../header.php');
?>

<!-- COMING SOON PAGE -->
<section class="min-h-screen bg-white flex items-center justify-center relative overflow-hidden pt-24 pb-20">
    <div class="absolute top-[-5%] right-[-5%] w-[50rem] h-[50rem] bg-slate-900/5 rounded-full blur-[120px] pointer-events-none"></div>
    <div class="absolute bottom-[-10%] left-[-5%] w-[40rem] h-[40rem] bg-red-500/5 rounded-full blur-[100px] pointer-events-none"></div>

    <div class="max-w-2xl mx-auto px-4 text-center relative z-10">
        <div class="w-20 h-20 rounded-3xl bg-slate-100 border border-slate-200 flex items-center justify-center mx-auto mb-8 text-slate-700 text-4xl shadow-sm">
            <i class="fas fa-lock"></i>
        </div>

        <h1 class="text-5xl md:text-6xl font-black text-slate-900 tracking-tighter mb-6 leading-[1.1]">
            ZeroTrust Access™
        </h1>
        <p class="text-xl text-slate-500 font-light leading-relaxed mb-4 tracking-tight">
            Never trust, always verify. A ready-to-deploy Zero Trust network security product that secures your organization's systems, users, and data. Built by leaders in Enterprise Cybersecurity Solutions Africa.
        </p>
        <p class="text-base text-slate-400 mb-12 font-medium">This product is currently in final security testing. Register your interest below.</p>

        <form class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto mb-10" onsubmit="handleSubmit(event)">
            <input type="email" required placeholder="your@company.com"
                class="flex-grow px-5 py-4 rounded-xl border border-slate-200 bg-slate-50 text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-slate-700 focus:border-transparent text-sm font-medium tracking-tight">
            <button type="submit"
                class="px-6 py-4 bg-slate-900 text-white font-bold rounded-xl hover:bg-slate-800 transition-all shadow-lg text-sm tracking-tight whitespace-nowrap">
                Register Interest
            </button>
        </form>
        <div id="success-msg" class="hidden text-emerald-600 font-semibold text-sm mb-6">✅ You're on the list! We'll be in touch.</div>

        <a href="../solutions/e7shield" class="inline-flex items-center gap-2 text-slate-400 hover:text-slate-700 font-medium text-sm transition-colors">
            <i class="fas fa-arrow-left text-xs"></i> Back to E7Shield™
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
