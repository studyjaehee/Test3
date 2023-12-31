# Test3


#### 과제 : 서버 내 취약점 공격 및 방어

#### 1. 취약점
   - SQL 인젝션 취약점
   - XSS 취약점
   - 세션 하이재킹 취약점
   - 입력 값 검증 부재
   - DB 연결 정보 노출

   위와 같은 취약점이 발견되었다.
   
   그 중 SQL 인젝션 취약점과 XSS 취약점을 공격하여 공격 결과를 확인하려한다.

#### 2. 공격 시나리오 및 결과
   - SQL 인젝션
   - 공격자는 ID 입력 칸에 'or 1=1#' 를 입력하여 항상 결과가 참인 구문을 만들고 # 뒤에 구문은 주석처리가 되어 로그인에 성공한다.
   -  성공 후 공격자는 데이터베이스에서 정보를 수집하거나, 악성 코드를 실행할 수 있다.
   - 사용자의 ID나 PW 정보는 물론 전화번호나 집주소 등의 자산(정보)을 탈취할 수 있다.
     
![sql인젝션 시도](https://github.com/studyjaehee/Test3/assets/91130771/8de9d2eb-a4e7-417e-af9a-043db5003cc5)


![sql인젝션 성공](https://github.com/studyjaehee/Test3/assets/91130771/e7c5fd3d-0d84-423f-ae08-f29cf62b9023)

- XSS 취약점
- 공격자는 게시물의 내용에 악성 스크립트를 삽입한다.
- 예를 들어, ' <script>alert(document.cookie);</script> ' 라는 스크립트를 삽입한다.
- 사용자가 해당 게시물을 클릭하면, 악성 스크립트가 실행되어 경고창이 발생한다.
 
  ![xss 공격 성공](https://github.com/studyjaehee/Test3/assets/91130771/978d06d5-3842-4b24-9c1a-556ac4799efd)


- 디렉터리 리스팅
- 의도치 않게 서버에 있는 자료가 노출될 수 있다.
- 소스코드가 유출되어 공격자로부터 해킹을 당할 수 있다.
   
  ![디렉터리 리스팅1](https://github.com/studyjaehee/Test3/assets/91130771/5d543103-201e-41c6-b16f-7967579cc778)


  ![디렉터리 리스팅2](https://github.com/studyjaehee/Test3/assets/91130771/bea97d7e-b250-4901-84f6-870f5de82699)


  

