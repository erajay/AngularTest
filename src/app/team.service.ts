import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';


@Injectable({
  providedIn: 'root'
})
export class TeamService {

  public REST_API_SERVER = 'http://localhost/cricket_angular/backend/public';

  constructor(private httpClient: HttpClient) {}

   public sendGetTeamRequest() {
    return this.httpClient.get(this.REST_API_SERVER+'/'+'teams');
  }

  public sendTeamDetails(id) {
    return this.httpClient.get(this.REST_API_SERVER+'/'+'team/'+id);
  }

  public sendMatchDetails(id) {
    return this.httpClient.get(this.REST_API_SERVER+'/'+'matches/'+id);
  }

  public getTeamDetails(id) {
    return this.httpClient.get(this.REST_API_SERVER+'/'+'teamDetail/'+id);
  }

  public getPointDetails(id) {
    return this.httpClient.get(this.REST_API_SERVER+'/'+'points/'+id);
  }
}
