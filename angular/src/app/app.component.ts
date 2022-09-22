import { Component, Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
@Injectable()
@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})

export class AppComponent {
  constructor( private http: HttpClient){}
  onSubmit(data: any)
  {
    this.http.post('http://127.0.0.1:8000/newsletter/store', data).subscribe(
      (result)=> console.log('Following entry has been persisted', result)
    )
  }
}
