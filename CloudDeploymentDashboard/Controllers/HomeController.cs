using Microsoft.AspNetCore.Mvc;
using System.Runtime.InteropServices;

namespace CloudDeploymentDashboard.Controllers
{
    public class HomeController : Controller
    {
        private readonly IConfiguration _configuration;
        private readonly IWebHostEnvironment _environment;
        private readonly ILogger<HomeController> _logger;

        public HomeController(
            IConfiguration configuration,
            IWebHostEnvironment environment,
            ILogger<HomeController> logger)
        {
            _configuration = configuration;
            _environment = environment;
            _logger = logger;
        }

        public IActionResult Index()
        {
            _logger.LogInformation(
                "Cloud Deployment Dashboard homepage accessed at {Time}",
                DateTime.UtcNow);

            ViewData["Environment"] = _environment.EnvironmentName;
            ViewData["Runtime"] = RuntimeInformation.FrameworkDescription;
            ViewData["DeploymentMessage"] =
                _configuration["DeploymentMessage"]
                ?? "Running with local application configuration";

            ViewData["ServerTime"] = DateTime.UtcNow.ToString("dd MMM yyyy HH:mm:ss 'UTC'");

            return View();
        }

        public IActionResult Privacy()
        {
            return View();
        }
    }
}