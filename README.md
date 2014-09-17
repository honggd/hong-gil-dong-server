hong-gil-dong-server
====================

홍길동 NScreen 서버

2014 SOSCON BLUEHACK 해커톤 결과물

클라우드 서버의 동영상을 타이젠 기반 디바이스나 PC 등에서 쉽게 이어보기 및 동시재생을 할 수 있도록 하여주는 미디어 서버 입니다.

웹브라우져에서도 바로 재생이 가능 하며, 타이젠 기반의 디바이스 또는 스마트폰 에서 앱을 개발 할 수 있도록 API를 제공 합니다.

현재 제공 되는 API는 아래와 같습니다.


1. 웹브라우져를 통하여 동영상 재생

  - 요청 : http://{yourserver.com}/video/play_video/{동영상ID}
  - 결과물 : 웹브라우져를 통하여 동영상을 재생 합니다.

2. 동영상 목록

  - 요청 : http://{yourserver.com}/video/get_list
  - 결과물 : json 형식으로 재생 가능한 동영상 정보를 제공 합니다.
  
3. 동영상 위치 저장

  - 요청 : http://{yourserver.com}/video/set_position/{동영상ID}/{재생포인트}
  - 결과물 : boolnean

4. 동영상 위치 리셋
  - 요청 : http://{yourserver.com}/video/set_position/{동영상ID}/reset
  - 결과물 : boolnean

5. Demo

  <a href="http://hong.hoksi.wo.tc/video/play_video/4" target="_blank">동영상 보기</a><br/>
  <a href="http://hong.hoksi.wo.tc/video/get_list" target="_blank">동영상 목록</a><br/>
  <a href="http://hong.hoksi.wo.tc/video/set_position/4/600" target="_blank">동영상 위치 저장</a><br/>
  <a href="http://hong.hoksi.wo.tc/video/set_position/4/reset" target="_blank">동영상 위치 리셋</a><br/>
  
