using Microsoft.AspNetCore.Mvc;

namespace MansetDus.Controllers
{
    public class HomeController : Controller
    {
        public IActionResult Index()
        {
            return View();
        }
    }
}