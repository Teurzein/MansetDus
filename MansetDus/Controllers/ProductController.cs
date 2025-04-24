using Microsoft.AspNetCore.Mvc;
using MansetDus.Models;

namespace MansetDus.Controllers
{
    public class ProductController : Controller
    {
        public IActionResult Index()
        {
            var products = new List<Product>
            {
                new Product { Id = 1, Name = "Modern Duşakabin", Description = "Cam temperli, kayar kapaklı model." },
                new Product { Id = 2, Name = "Köşe Duşakabin", Description = "Alan tasarruflu tasarım." }
            };

            return View(products);
        }

        public IActionResult Detail(int id)
        {
            var product = new Product { Id = id, Name = "Ürün " + id, Description = "Bu ürünün detay açıklaması burada yer alır." };
            return View(product);
        }
    }
}