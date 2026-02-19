import sys
from collections import deque

INF = 10**9


class Dinic:
    def __init__(self, n, s, t):
        self.n = n
        self.s = s
        self.t = t
        self.graph = [[] for _ in range(n)]

    def add_edge(self, u, v, cap):
        self.graph[u].append([v, cap, len(self.graph[v])])
        self.graph[v].append([u, 0, len(self.graph[u]) - 1])

    def bfs(self, level):
        for i in range(self.n):
            level[i] = -1
        q = deque([self.s])
        level[self.s] = 0
        while q:
            u = q.popleft()
            for v, cap, _ in self.graph[u]:
                if cap > 0 and level[v] == -1:
                    level[v] = level[u] + 1
                    q.append(v)
        return level[self.t] != -1

    def dfs(self, u, flow, level, ptr):
        if u == self.t:
            return flow
        while ptr[u] < len(self.graph[u]):
            v, cap, rev = self.graph[u][ptr[u]]
            if cap > 0 and level[v] == level[u] + 1:
                pushed = self.dfs(v, min(flow, cap), level, ptr)
                if pushed:
                    self.graph[u][ptr[u]][1] -= pushed
                    self.graph[v][rev][1] += pushed
                    return pushed
            ptr[u] += 1
        return 0

    def max_flow(self):
        flow = 0
        level = [-1] * self.n
        while self.bfs(level):
            ptr = [0] * self.n
            while True:
                pushed = self.dfs(self.s, INF, level, ptr)
                if not pushed:
                    break
                flow += pushed
        return flow


data = sys.stdin.read().strip().split()
idx = 0

while idx < len(data):
    n = int(data[idx]); idx += 1
    m = int(data[idx]); idx += 1

    edges = []

    for _ in range(m):
        token = data[idx]; idx += 1  # "(x,y)"
        token = token[1:-1]          # remove ()
        u, v = map(int, token.split(','))
        edges.append((u, v))

    ans = n

    for s in range(n - 1):
        for t in range(s + 1, n):

            dinic = Dinic(2 * n, s + n, t)

            for i in range(n):
                dinic.add_edge(i, i + n, 1)

            for u, v in edges:
                dinic.add_edge(u + n, v, n)
                dinic.add_edge(v + n, u, n)

            ans = min(ans, dinic.max_flow())

    print(ans)
