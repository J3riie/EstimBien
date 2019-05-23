import { BrowserModule } from '@angular/platform-browser';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { NgModule } from '@angular/core';
import { ReactiveFormsModule } from '@angular/forms';

import { AppComponent } from './app.component';
import { Ng5SliderModule } from 'ng5-slider';
import { FormComponent } from './form/form.component';
import { AccueilComponent } from './accueil/accueil.component';
import { MethodesComponent } from './methodes/methodes.component';
import { ContactComponent } from './contact/contact.component';

import { RouterModule, Routes } from '@angular/router';


const appRoutes: Routes = [
  { path: '', redirectTo: '/accueil', pathMatch: 'full' },
  { path: 'form', component: FormComponent },
  { path: 'accueil', component: AccueilComponent},
  { path: 'methodes', component: MethodesComponent},
  { path: 'contact', component: ContactComponent},
  //{ path: '**', component: PageNotFoundComponent }
];

@NgModule({
  declarations: [
    AppComponent,
    FormComponent,
    AccueilComponent,
    MethodesComponent,
    ContactComponent
  ],
  imports: [
    RouterModule.forRoot(
      appRoutes,
      { enableTracing: true } // <-- debugging purposes only
    ),
    BrowserModule,
    BrowserAnimationsModule,
    Ng5SliderModule,
    ReactiveFormsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})

export class AppModule { }