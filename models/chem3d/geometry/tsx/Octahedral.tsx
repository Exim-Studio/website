/*
Auto-generated by: https://github.com/pmndrs/gltfjsx
*/

import * as THREE from 'three'
import React, { useRef } from 'react'
import { useGLTF } from '@react-three/drei'
import { GLTF } from 'three/examples/jsm/loaders/GLTFLoader'

type GLTFResult = GLTF & {
  nodes: {
    Sphere: THREE.Mesh
    Cylinder: THREE.Mesh
    Cylinder001: THREE.Mesh
    Cylinder002: THREE.Mesh
    Cylinder003: THREE.Mesh
    Cylinder004: THREE.Mesh
    Cylinder005: THREE.Mesh
    Sphere001: THREE.Mesh
    Sphere002: THREE.Mesh
    Sphere003: THREE.Mesh
    Sphere004: THREE.Mesh
    Sphere005: THREE.Mesh
    Sphere006: THREE.Mesh
  }
  materials: {
    ['Material.001']: THREE.MeshStandardMaterial
    ['Material.002']: THREE.MeshStandardMaterial
    ['Material.003']: THREE.MeshStandardMaterial
  }
}

export default function Model(props: JSX.IntrinsicElements['group']) {
  const group = useRef<THREE.Group>()
  const { nodes, materials } = useGLTF('/octahedral.gltf') as GLTFResult
  return (
    <group ref={group} {...props} dispose={null}>
      <mesh geometry={nodes.Sphere.geometry} material={materials['Material.001']} />
      <mesh
        geometry={nodes.Cylinder.geometry}
        material={nodes.Cylinder.material}
        position={[0, 0, -1.78]}
        rotation={[Math.PI / 2, 0, 0]}
        scale={[0.25, 0.97, 0.25]}
      />
      <mesh
        geometry={nodes.Cylinder001.geometry}
        material={nodes.Cylinder001.material}
        position={[0, 0, 1.84]}
        rotation={[Math.PI / 2, 0, 0]}
        scale={[0.25, 0.97, 0.25]}
      />
      <mesh
        geometry={nodes.Cylinder002.geometry}
        material={nodes.Cylinder002.material}
        position={[-1.82, 0, 0.06]}
        rotation={[Math.PI / 2, 0, -Math.PI / 2]}
        scale={[0.25, 0.97, 0.25]}
      />
      <mesh
        geometry={nodes.Cylinder003.geometry}
        material={nodes.Cylinder003.material}
        position={[1.78, 0, 0.06]}
        rotation={[Math.PI / 2, 0, -Math.PI / 2]}
        scale={[0.25, 0.97, 0.25]}
      />
      <mesh
        geometry={nodes.Cylinder004.geometry}
        material={nodes.Cylinder004.material}
        position={[0, 1.73, 0]}
        rotation={[-Math.PI, 0, 0]}
        scale={[0.25, 0.97, 0.25]}
      />
      <mesh
        geometry={nodes.Cylinder005.geometry}
        material={nodes.Cylinder005.material}
        position={[0, -1.72, 0]}
        rotation={[-Math.PI, 0, 0]}
        scale={[0.25, 0.97, 0.25]}
      />
      <mesh
        geometry={nodes.Sphere001.geometry}
        material={nodes.Sphere001.material}
        position={[0, 3.32, 0]}
        scale={0.78}
      />
      <mesh
        geometry={nodes.Sphere002.geometry}
        material={nodes.Sphere002.material}
        position={[0, -3.18, 0]}
        scale={0.78}
      />
      <mesh
        geometry={nodes.Sphere003.geometry}
        material={nodes.Sphere003.material}
        position={[3.31, -0.01, 0]}
        scale={0.78}
      />
      <mesh
        geometry={nodes.Sphere004.geometry}
        material={nodes.Sphere004.material}
        position={[-3.28, -0.01, 0]}
        scale={0.78}
      />
      <mesh
        geometry={nodes.Sphere005.geometry}
        material={nodes.Sphere005.material}
        position={[0, -0.02, -3.34]}
        scale={0.78}
      />
      <mesh
        geometry={nodes.Sphere006.geometry}
        material={nodes.Sphere006.material}
        position={[0, -0.02, 3.36]}
        scale={0.78}
      />
    </group>
  )
}

useGLTF.preload('/octahedral.gltf')
