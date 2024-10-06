<?php

use Illuminate\Support\Facades\Route;

Route::get("/", [\App\Http\Controllers\HomeController::class, "index"])->name("home");
Route::get("/noticias", [\App\Http\Controllers\ArticleController::class, "index"])->name("articles.index");
Route::get("/suscripcion", [\App\Http\Controllers\PlanController::class, "index"])->name("plan.index");

Route::get("/iniciar-sesion", [\App\Http\Controllers\AuthController::class, "login"])->name("auth.login");
Route::post("/iniciar-sesion", [\App\Http\Controllers\AuthController::class, "actionLogin"])->name("auth.actionLogin");
Route::post("/cerrar-sesion", [\App\Http\Controllers\AuthController::class, "logout"])->name("auth.logout");

Route::get("/admin", [\App\Http\Controllers\ArticleController::class, "admin"])->name("admin.index")->middleware("auth");


Route::get("noticias/{id}", [\App\Http\Controllers\ArticleController::class, "show"])->name("articles.show")->whereNumber("id");

Route::get("/admin/publicar", [\App\Http\Controllers\ArticleController::class, "create"])->name("articles.create")->middleware("auth");
Route::post("/admin/publicar", [\App\Http\Controllers\ArticleController::class, "store"])->name("articles.store")->middleware("auth");


Route::get("/admin/{id}/editar", [\App\Http\Controllers\ArticleController::class, "edit"])->name("articles.edit")->middleware("auth");
Route::post("/admin/{id}/editar", [\App\Http\Controllers\ArticleController::class, "update"])->name("articles.update")->middleware("auth");

Route::get("/admin/{id}/borrar", [\App\Http\Controllers\ArticleController::class, "delete"])->name("articles.delete")->middleware("auth");
Route::post("/admin/{id}/borrar", [\App\Http\Controllers\ArticleController::class, "destroy"])->name("articles.destroy")->middleware("auth");