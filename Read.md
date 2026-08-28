# SWE40006 Deployment Task 2

This repository contains the source code for two web applications deployed to Microsoft Azure for SWE40006 Software Deployment and Evolution.

## Applications

### Cloud Deployment Dashboard
ASP.NET Core MVC application targeting .NET 10.

Features:
- Azure App Service deployment
- Azure App Settings
- Custom `/health` endpoint
- Application logging and Log Stream
- Azure Application Insights
- Live Metrics and performance telemetry

### PHP Deployment Monitor
Custom PHP 8.x application deployed to Azure App Service on Linux.

Features:
- PHP 8.x runtime
- Linux App Service deployment
- Dynamic runtime and server information
- Application Insights browser telemetry
- Page-view monitoring

## Repository Structure

```text
CloudDeploymentDashboard/      ASP.NET Core application
SWE40006-PHP-Deployment/       PHP application
CloudDeploymentDashboard.slnx  Visual Studio solution
