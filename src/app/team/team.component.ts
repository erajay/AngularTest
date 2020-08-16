import { Component, OnInit } from '@angular/core';
import {TeamService} from '../team.service';

@Component({
  selector: 'app-team',
  templateUrl: './team.component.html',
  styleUrls: ['./team.component.css']
})

export class TeamComponent implements OnInit {
  allteam=[];
  p_detail=[];
  m_detail=[];
  winner=[];
  winner2=[];
  point_detail=[];  
  URL:string;
  constructor(private team: TeamService) { }

  teamDeail(id){
    this.team.sendTeamDetails(id).subscribe((data:any[])=>{
      console.log(data);
      this.p_detail=data;
   });
   
   this.team.sendMatchDetails(id).subscribe((data:any[])=>{
    console.log('match'+data);
    this.m_detail=data;
 });

 this.team.getPointDetails(id).subscribe((data:any[])=>{
  console.log('point'+data);
  this.point_detail=data;
});

 
  
}


winners(id){
  this.team.getTeamDetails(id).subscribe((data:any[])=>{
    console.log('winners'+data);
    this.winner=data;
 });
}

winners2(id){
  this.team.getTeamDetails(id).subscribe((data:any[])=>{
    
    this.winner2=data;
 });
}
  ngOnInit(): void {
    this.URL= this.team.REST_API_SERVER;
    this.team.sendGetTeamRequest().subscribe((data:any[])=>{
       console.log(data);
       this.allteam=data;
    });
  }

}
