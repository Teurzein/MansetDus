using Microsoft.AspNetCore.Mvc;

namespace MansetDus.Controllers
{
    public class PageController : Controller
    {
        public IActionResult About() => View();
        public IActionResult Contact() => View();
        public IActionResult References() => View();
        public IActionResult Faq() => View();
    }
}